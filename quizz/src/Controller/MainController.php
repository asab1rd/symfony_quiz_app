<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(CategorieRepository $categorieRepository)
    {
        $user = $this->get('security.token_storage')->getToken();
        dd($user);
        $categories = $categorieRepository->findAll();
        // dd($categories);
        return $this->render('main/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
