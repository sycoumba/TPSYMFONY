<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientNonSalarieController extends AbstractController
{
    /**
     * @Route("/client/non/salarie", name="client_non_salarie")
     */
    public function index()
    {
        return $this->render('client_non_salarie/index.html.twig', [
            'controller_name' => 'ClientNonSalarieController',
        ]);
    }
}
