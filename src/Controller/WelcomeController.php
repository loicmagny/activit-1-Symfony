<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function app_home(): Response
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function app_about(): Response
    {
        return $this->render('welcome/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
