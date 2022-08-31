<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
    #[Route('/homepage/showmyname', name: 'app_show_my_name')]
    public function showMyName(): Response
    {
        $name = 'Yasser';
        return $this->render('homepage/showmyname.html.twig', ['name' => $name]);
    }
}
