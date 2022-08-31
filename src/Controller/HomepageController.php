<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class HomepageController extends AbstractController
{

    #[Route('/homepage', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
    #[Route('/', name: 'home')]
    public function showMyName(Request $request): Response
    {
        $name = $request->request->get('name');
        if ($name) {
            return $this->render('homepage/showmyname.html.twig', ['name' => $name]);
        }
        return $this->render('homepage/showmyname.html.twig', ['name' => 'Enter your name please!']);
    }
}
