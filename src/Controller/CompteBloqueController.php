<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteBloqueController extends AbstractController
{
    /**
     * @Route("/compte/bloque", name="compte_bloque")
     */
    public function index()
    {
        return $this->render('compte_bloque/index.html.twig', [
            'controller_name' => 'CompteBloqueController',
        ]);
    }
}
