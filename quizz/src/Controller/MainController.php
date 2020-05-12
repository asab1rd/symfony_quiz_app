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
        $categories = $categorieRepository->findAll();
        // dd($categories);
        return $this->render('main/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/activation/{id}", name="active")
     */
    public function activation(int $id, UserRepository $user)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $active = $user->find($id);

        $active->setStatus('active');
        $entityManager->persist($active);
        $entityManager->flush();
        return $this->render('main/activation.html.twig');;
    }
}
