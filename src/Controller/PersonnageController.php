<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/* La classe PersonnageController a pour but de gerer le routage avec les annotations
    et possède plusieurs méthodes pour afficher une vue.
*/

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    /**
     * @Route("/persos", name="personnages")
     */
    public function persos()
    {
        return $this->render('personnage/persos.html.twig', [
            "pseudo" => "TomTom",
            "age" => 25,
            "carac" => [
                "force" => 5,
                "agi" => 5,
                "intel" =>10
            ]
        ]);
    }
}
