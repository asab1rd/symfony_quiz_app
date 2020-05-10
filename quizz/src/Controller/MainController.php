<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
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
