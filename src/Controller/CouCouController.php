<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CouCouController extends AbstractController
{
    #[Route('/', name: 'homepage_coucou')]
    public function index(): Response
    {
        return $this->render('cou_cou/index.html.twig', [
            'titre' => 'homepage',
        ]);
    }
}
