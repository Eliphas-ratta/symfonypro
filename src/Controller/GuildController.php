<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GuildController extends AbstractController
{
    #[Route('/guild', name: 'app_guild')]
    public function index(): Response
    {
        return $this->render('guild/index.html.twig', [
            'controller_name' => 'GuildController',
        ]);
    }
}
