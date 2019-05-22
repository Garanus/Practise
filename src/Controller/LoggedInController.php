<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoggedInController extends AbstractController
{
    /**
     * @Route("/loggedin", name="loggedin")
     *
     */
    //Kontroler uzytkownika po zalogowaniu
    public function index()
    {
        {
            $user = $this->getUser();
            if (is_null($user)) {
                return $this->redirectToRoute('login');
            }
            $products = null; //$this->getDoctrine()->getRepository(User::class)->findProductsByUser($user);
            $buttonChanger = 'false';
            return $this->render('logged_in/loggedin.html.twig', ['products' => $products,]);
        }
    }
}

//findProductsByUser