<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\{HttpFoundation\Response, Routing\Annotation\Route, Security\Http\Attribute\IsGranted};

#[Route('/admin', name: 'admin.')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'index')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'titlePages' => 'Dashboard'
        ]);
    }
}
