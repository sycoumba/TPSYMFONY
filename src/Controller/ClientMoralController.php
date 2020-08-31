<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ClientMoral;


class ClientMoralController extends AbstractController

{
    
    /**
     * @Route("/", name="client_moral")
     */
    public function ajout()
    {
    
        $mr = $this->getDoctrine()->getManager();
        $ClientMoral = new ClientMoral();
        $ClientMoral->setNomEntreprise('nom_entreprise');
        $ClientMoral->setAdresse('adresse');
        $ClientMoral->setTelephone('telephone');
        $ClientMoral->setEmail('email');
        $ClientMoral->setTypeEntreprise('type_entreprise');
        $ClientMoral->setRaisonSocial('raison_social');
        $ClientMoral->setIdentifiantEntreprise('identifiant_entreprise');
        $mr->persist($ClientMoral);
        $mr->flush;
        return $this->render('client_moral/ajout.html.twig', [
            'ClientMoral' => 'ClientMoralController',
           
        ]);
        
        
    }
    
}
