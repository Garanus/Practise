<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoggedInController extends AbstractController
{
    /**
     * @Route("/loggedin", name="loggedin")
     */
    //Kontroler uzytkownika po zalogowaniu
    public function index()
    {
        return $this->render('logged_in/loggedin.html.twig', [
            'controller_name' => 'LoggedInController',
        ]);
    }
}
