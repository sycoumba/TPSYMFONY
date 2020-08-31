<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteCourantController extends AbstractController
{
    /**
     * @Route("/compte/courant", name="compte_courant")
     */
    public function index()
    {
        return $this->render('compte_courant/index.html.twig', [
            'controller_name' => 'CompteCourantController',
        ]);
    }
}
