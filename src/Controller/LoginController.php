<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
      /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'message' => 'mon premier controller',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('login/index.html.twig', [
            'message' => 'LoginController',
        ]);
    }
     /**
     * @Route("/logon", name="logon")
     */

public function logon()
{
    return $this->render('client_moral/ajout.html.twig', [
        'message' => 'LoginController',
    ]);
}
}


