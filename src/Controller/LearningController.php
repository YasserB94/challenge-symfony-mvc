<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    #[Route('/learning', name: 'app_learning')]
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }
    #[Route('/learning/aboutme', name: 'about')]
    public function aboutMe(): Response
    {
        $LearnerName = 'Yasser';
        $LearnerOrganisation = 'BeCode';
        return $this->render('learning/about.html.twig', [
            'name' => $LearnerName,
            'org' => $LearnerOrganisation
        ]);
    }
}
