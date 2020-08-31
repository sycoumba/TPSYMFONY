<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteEpargneController extends AbstractController
{
    /**
     * @Route("/compte/epargne", name="compte_epargne")
     */
    public function index()
    {
        return $this->render('compte_epargne/index.html.twig', [
            'controller_name' => 'CompteEpargneController',
        ]);
    }
}
