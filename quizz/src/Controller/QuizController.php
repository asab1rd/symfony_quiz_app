<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Quiz;
use App\Entity\User;
use App\Repository\CategorieRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class QuizController extends AbstractController
{
    /**
     * @Route("/quiz", name="quiz")
     */
    public function index()
    {
        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
        ]);
    }
    /**
     * @Route("/quizzes", name="app_my_quizzes")
     */
    public function myquizzes(QuizRepository $quizRepository, UserRepository $userRepository)
    {
        $user = $this->get('security.token_storage')->getToken();
        if ($user->getUser() === "anon.") {
            //We want check if this anonymous user arleady played in our database
            $anonymousUser = $userRepository->findOneBy([
                'email' => $user->getSecret(),
            ]);
            $user = $anonymousUser ?? $user->getUser();
        } else {
            $user = $user->getUser();
        }
        $quizzes =  $quizRepository->findBy([
            'user' => $user,
        ]);
        // dd($quizzes);
        // dd($categories);
        return $this->render('quiz/done.html.twig', [
            'quizzes' => $quizzes,
        ]);
    }
    /**
     * @Route("/categories", name="quiz_show_categories")
     */
    public function showCategories(CategorieRepository $categorieRepository)
    {
        $categories = $categorieRepository->findAll();

        return $this->render('main/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/game/{categoryId}", name="quiz_play", methods="GET|POST")
     */
    public function play(int $categoryId, Request $request, QuizRepository $quizRepository, CategorieRepository $categoryRepository, QuestionRepository $questionRepository, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder)
    {
        //                      USER CONFIG                             //
        $user = $this->get('security.token_storage')->getToken();
        if ($user->getUser() === "anon.") {
            //We want check if this anonymous user arleady played in our database
            $anonymousUser = $userRepository->findOneBy([
                'email' => $user->getSecret(),
            ]);
            if (!$anonymousUser) {
                //If he doest not exist we create him a temporary account
                $anonymousUser = $this->createAnonymousUser($user->getSecret(), $passwordEncoder);
            }
            $user = $anonymousUser;
        } else {
            $user = $user->getUser();
        }        //                      END USER CONFIG
        $quiz = $quizRepository->findOneBy([
            'category' => $categoryId,
            'user' => $user->getId(),
        ]);

        // CATEGORYYYYYYYYYY
        $category = $categoryRepository->find($categoryId);
        $questions = $category->getQuestions();

        //GAME CONDITIONS
        if ($quiz) {
            $currentQuestion = $quiz->getCurrentQuestion();
            //If we arleady have played wewant to check if the game is finished
            if ($quiz->getFinished()) {
                // If he arleady finished the quiz
                return $this->render("quiz/index.html.twig", ["message" => "Vous avez déjà joué et fini le quizz, voici le score : " . $quiz->getScore()]);
            } else if ($request->isMethod("POST")) {
                // He left the quiz in the middle
                $req = $request->request->all();
                if (!empty($request) && isset($req["reponse_id"])) {
                    $currentReponse = intval($req["reponse_id"]);
                    $data = ["question_id" => $currentQuestion, "reponse_id" => $currentReponse];

                    // dd($data);
                } else {
                    return new Response("Invalid DATA");
                }
            } else {
                return $this->render('quiz/quizzes.html.twig', [
                    'question' => $questions->get($currentQuestion - 1),
                    "nextRoute" => "/game/$categoryId"
                ]);
            }
        } else {
            // If we never played we want to create a quiz
            $quiz = new Quiz;
            $quiz = $this->createQuiz($quiz, [
                "category" => $categoryRepository->find($categoryId),
                "user" => $user,
                "questions" => [],
                "score" => 0,
                "finished" => false,
                "current" => 0
            ]);
            $data = [];
        }
        // HIS RESPONSE FROM THE FORM

        $quiz = $this->dbPlay($user, $quiz, $data, $questionRepository);
        $currentQuestion = $quiz->getCurrentQuestion();
        if ($quiz->getFinished()) {
            //IF HE JUST FINISHED
            return $this->render("quiz/index.html.twig", ["message" => "Felicitations vous venez de finir le quiz, voici le score : " . $quiz->getScore()]);
        }
        return $this->render('quiz/quizzes.html.twig', [
            'question' => $questions->get($currentQuestion - 1),
            "nextRoute" => "/game/$categoryId",
            "quiz" => $quiz

        ]);
    }

    private function dbPlay(User $user, Quiz $quiz, array $data, QuestionRepository $questionRepository)
    {
        $entityManager = $this->getDoctrine()->getManager();
        //Update the quizz Array
        $category = $quiz->getCategory();
        $currentQuestion = $quiz->getCurrentQuestion();
        if ($currentQuestion === $category->getQuestions()->count()) {
            // If we are on the last question no need to update the current question
            $finished = true;
        } else {
            $finished = false;
            $currentQuestion++;
        }
        $score = $quiz->getScore();
        $questions = $quiz->getQuestions();
        if (!empty($data)) {
            // Here we will avoid updating the score on the first play
            $question = $category->getQuestions()->get($data["question_id"] - 1);
            $reponses = $question->getReponses()->toArray();
            foreach ($reponses as $key => $rep) {
                //GET THE ACTUAL REPONSE IN ALL REPONSES TO THE QUESTIONS
                if ($rep->getId() === $data["reponse_id"]) {
                    $reponse = $rep;
                }
            }
            if ($reponse->getReponseExpected() === 1) {
                $score++;
            }
            array_push($questions, $data);
        }
        $game = $this->createQuiz($quiz, [
            "category" => $category,
            "user" => $user,
            "questions" => $questions,
            "score" => $score,
            "finished" => $finished,
            "current" => $currentQuestion
        ]);
        $entityManager->persist($game);
        $entityManager->flush($game);
        return $game;
    }

    private function createQuiz(Quiz $game = null, array $quiz): Quiz
    {
        $game->setCategory($quiz['category']);
        $game->setUser($quiz['user']);
        $game->setQuestions($quiz['questions']);
        $game->setScore($quiz['score']);
        $game->setFinished($quiz['finished']);
        $game->setCurrentQuestion($quiz['current']);
        return $game;
    }

    private function createAnonymousUser(string $secret, UserPasswordEncoderInterface $passwordEncoder): User
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = new User;
        $user->setEmail($secret);
        $user->setRoles(["ROLE_ANONYMOUS"]);
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $secret
            )
        );
        $user->setStatus("anonymous");
        $entityManager->persist($user);
        $entityManager->flush();
        return $user;
    }
    /**
     * @Route("/test/user", name="quiz_test",  )
     */

    public function test(QuizRepository $quiz, CategorieRepository $category)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        // $isCategoryExist = $quiz->findOneBy([
        //     'category' => 2,
        //     'user' => $user->getId(),
        // ]);
        // dd($isCategoryExist);

        $category = $category->find(2);
        $entityManager = $this->getDoctrine()->getManager();
        $game = new Quiz;
        $game->setCategory($category);
        $game->setUser($user);
        $game->setQuestions([
            "quesion_id" => 1, "response_id" => 1
        ]);
        $game->setScore(0);
        $game->setFinished(false);
        $entityManager->persist($game);
        $entityManager->flush();
    }

    /**
     * @Route("/create/quizz", name="quiz_create",  )
     */
    public function createQuizz()
    {

        // $category = new Categorie;
        // $category->setName("");
        // $category->set
        return new Response("not allowed");
    }
}
