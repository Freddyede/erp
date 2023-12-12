<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\{
    HttpFoundation\Response,
    Routing\Annotation\Route
};

#[Route('/', name: 'home.')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        /**
         * Gérer toutes les pizzas:
         *  - Entity: Pizzas V
         *  - Services: PizzasServices
         *  - MicroServices: ...
         *  - Controller: PizzasController
         */
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
