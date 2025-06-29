<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPageController extends AbstractController
{
    #[Route('/legal-notice', name: 'app_legal')]
    public function legal(): Response
    {
        return $this->render('static/legal.html.twig');
    }

    #[Route('/privacy-policy', name: 'app_privacy')]
    public function privacy(): Response
    {
        return $this->render('static/privacy.html.twig');
    }
}
