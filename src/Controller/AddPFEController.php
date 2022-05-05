<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddPFEController extends AbstractController
{
    #[Route('/add/p/f/e', name: 'app_add_p_f_e')]
    public function index(): Response
    {
        return $this->render('add_pfe/index.html.twig', [
            'controller_name' => 'AddPFEController',
        ]);
    }
}
