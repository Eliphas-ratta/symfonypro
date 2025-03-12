<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FactionController extends AbstractController
{
    #[Route('/faction', name: 'app_faction')]
    public function index(): Response
    {
        return $this->render('faction/index.html.twig', [
            'controller_name' => 'FactionController',
        ]);
    }
}
