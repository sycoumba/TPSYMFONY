<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientSalarieController extends AbstractController
{
    /**
     * @Route("/client/salarie", name="client_salarie")
     */
    public function index()
    {
        return $this->render('client_salarie/index.html.twig', [
            'controller_name' => 'ClientSalarieController',
        ]);
    }
}
