<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/category/{id}/{qst}", name="quiz_show_quizes",  requirements={"id"="\d+","qst"="\d+"})
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
     * @Route("/quiz/{id}", name="quiz_play",  requirements={"id"="\d+"})
     */
    public function play($id)
    {
    }
}
