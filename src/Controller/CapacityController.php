<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CapacityController extends AbstractController
{
    #[Route('/capacity', name: 'app_capacity')]
    public function index(): Response
    {
        return $this->render('capacity/index.html.twig', [
            'controller_name' => 'CapacityController',
        ]);
    }
}
