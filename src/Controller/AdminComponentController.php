<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminComponentController extends Controller
{
    /**
     * @Route("/", name="admin_component")
     */
    public function index(): Response
    {
        return $this->render('admin_component/index.html.twig', [
            'controller_name' => 'AdminComponentController',
        ]);
    }
}
