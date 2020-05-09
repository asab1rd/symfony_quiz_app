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
     * @Route("/category/{id}", name="quiz_show_quizes",  requirements={"id"="\d+"})
     */
    public function showQuizzesByCategory(int $id, CategorieRepository $categorieRepository)
    {
        if ($category = $categorieRepository->find($id)) {
            $questions = $category->getQuestions();
            // dd($questions);
            return $this->render('quiz/quizzes.html.twig', [
                'questions' => $questions,
            ]);
        }
    }
}
