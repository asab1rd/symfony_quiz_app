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
     * @Route("/categories", name="quiz_show_categories")
     */
    public function showCategories(CategorieRepository $categorieRepository)
    {
        $categories = $categorieRepository->findAll();

        dd($categories);
        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
        ]);
    }
    /**
     * @Route("/game/{id}/{qst}", name="quiz_show_quizes",  requirements={"id"="\d+","qst"="\d+"})
     */
    public function showQuizzesByCategory(int $id, int $qst, CategorieRepository $categorieRepository)
    {

        $reponses = [""];
        if ($category = $categorieRepository->find($id)) {
            $questions = $category->getQuestions();
            if ($questions->containsKey($qst - 1)) {
                $nextQst = $qst + 1;
                return $this->render('quiz/quizzes.html.twig', [
                    'question' => $questions->get($qst - 1),
                    "nextRoute" => "/category/$id/$nextQst"
                ]);
            }
        }
    }

    /**
     * @Route("/game/{categoryId}", name="quiz_play", methods="GET|POST")
     */
    public function play(int $categoryId, Request $request, QuizRepository $quizRepository, CategorieRepository $categoryRepository, QuestionRepository $questionRepository)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
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
                return $this->render("quiz/index.html.twig", ["message" => "Vous avez déjà joué et fini le quizz, voici le score" . $quiz->getScore()]);
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
        return $this->render('quiz/quizzes.html.twig', [
            'question' => $questions->get($currentQuestion - 1),
            "nextRoute" => "/game/$categoryId"
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
}
