<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(Request $request, UserRepository $user, ManagerRegistry $doctrine): Response
    {
        $countUser = $user->countByUser();

        return $this->render('home/index.html.twig', [
            'count' => $countUser,
        ]);
    }
}
