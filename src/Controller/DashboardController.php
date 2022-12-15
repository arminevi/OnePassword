<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $dumpMails = ['dump@gmail.com', 'dump@web.de', 'dump@yahoo.com'];
        #dd($dumpMails);
        return $this->render('index.html.twig', [
            'emails' => $dumpMails
        ]);
    }
}
