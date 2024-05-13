<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitDashboardController extends AbstractController
{
    #[Route('/produit/dashboard', name: 'app_produit_dashboard')]
    public function index(): Response
    {
        return $this->render('produit_dashboard/index.html.twig', [
            'controller_name' => 'ProduitDashboardController',
        ]);
    }
}
