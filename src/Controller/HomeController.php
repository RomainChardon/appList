<?php

namespace App\Controller;

use App\Repository\ProjetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProjetsRepository $projetsRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'projets' => $projetsRepository->findBy(['favori' => 1]),
        ]);
    }
}
