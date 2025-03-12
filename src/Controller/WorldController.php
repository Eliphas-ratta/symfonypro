<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WorldController extends AbstractController
{
    #[Route('/world', name: 'app_world')]
    public function index(): Response
    {
        return $this->render('world/index.html.twig', [
            'controller_name' => 'WorldController',
        ]);
    }
    
}
