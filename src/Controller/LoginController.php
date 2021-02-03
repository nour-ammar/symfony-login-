<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{  
     
    
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request , AuthenticationUtils $utils): Response
    {
        $error = $utils -> getLastAuthenticationError();
        $lastUsername = $utils -> getLastUsername();
        return $this->render('login/index.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername
        ]);
    }
     /**
     * @Route("/logout", name="logout")
     */ 
    public function logout()
    {
       
    }
   

}
