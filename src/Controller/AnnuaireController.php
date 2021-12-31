<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnuaireController extends AbstractController
{
    /**
     * @Route("/annuaire", name="app_annuaire")
     */
    public function annuaire(): Response
    {
        return $this->render('annuaire/index.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }

    /**
     * @Route("/annuaire-collaborateur", name="app_annuaire_collaborateur")
     */
    public function collaborateur(): Response
    {
        return $this->render('annuaire/collaborateur.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }

    /**
     * @Route("/annuaire-fournisseur", name="app_annuaire_fournisseur")
     */
    public function fournisseur(): Response
    {
        return $this->render('annuaire/fournisseur.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }

    /**
     * @Route("/annuaire-client", name="app_annuaire_client")
     */
    public function client(): Response
    {
        return $this->render('annuaire/client.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }

    /**
     * @Route("/annuaire-divers", name="app_annuaire_divers")
     */
    public function divers(): Response
    {
        return $this->render('annuaire/divers.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }
}
