<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestSecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration()
    {
        $test = new Test;
        $form = $this->createForm(TestType::class);
        return $this->render('test_security/registration.html.twig', [
            "form" => $form
        ]);
    }
}
