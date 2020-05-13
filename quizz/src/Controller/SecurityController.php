<?php

namespace App\Controller;

use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
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
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/dashboard",name="app_dashboard")
     */
    public function adminDashboard(UserRepository $userRepository, QuizRepository $quizRepository)
    {
        $users = $userRepository->findAll();
        $quizzes = $quizRepository->findAll();
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('security/dashboard.html.twig', ["users" => $users, "quizzes" => $quizzes]);
    }
}
