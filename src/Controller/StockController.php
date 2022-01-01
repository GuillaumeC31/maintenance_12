<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockController extends AbstractController
{
    /**
     * @Route("/articles", name="app_articles")
     */
    public function articles(): Response
    {
        return $this->render('stock/articles.html.twig', [
            'controller_name' => 'StockController',
        ]);
    }
}
