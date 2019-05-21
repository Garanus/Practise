<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class LoginController
 * @package App\Controller
 */
class LoginController extends Controller {
    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authenticationUtils
     * @return \Symfony\Component\HttpFoundation\Response
     */
    //Logowanie w oparciu o wbudowany modul symfony
    public function login(AuthenticationUtils $authenticationUtils){
        $user = $this->getUser();
        //Sprawdzenie czy uzytkownik jest zalogowany
        if (!(is_null($user))) {
            return $this->redirectToRoute('loggedin');
        }
        //pobranie bledow i  ostatniego usera
        $errors = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        //zaladowanie widoku
        return $this->render('User/login.html.twig', [
            'errors' => $errors,
            'username' => $lastUsername
        ]);

    }
    /**
     * @Route("/logout", name="logout")
     */
    //modul wylogowania, wbudowany
    public function logoutAction()
    {
    return $this->redirectToRoute('login');
    }
}