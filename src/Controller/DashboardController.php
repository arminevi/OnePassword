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
        $dumpUser = "Armin";
        $dumpPassword = array();
        $dumpPassword['user'] = array(
            "1" =>array(
                "id" => 1,
                "title" => "Google Konto",
                "user" => "TopG",
                "email" => "dump@gmail.com",
                "password" => "12345"
            ),
            "2" =>array(
                "id" => 2,
                "title" => "Nike Club",
                "user" => "",
                "email" => "dump@gmail.com",
                "password" => "MichaelJordan1"
            ),
            "3" =>array(
                "id" => 3,
                "title" => "Amazon",
                "user" => "",
                "email" => "dump@gmail.com",
                "password" => "JeffBezos24"
            ),
            "4" =>array(
                "id" => 4,
                "title" => "Playstation",
                "user" => "xXGamerHDXx",
                "email" => "dump@gmail.com",
                "password" => "playsiOne"
            )
        );
        
        #dd($dumpPassword);

        return $this->render('index.html.twig', [
            'data' => $dumpPassword,
            'user' => $dumpUser
        ]);
    }
}
