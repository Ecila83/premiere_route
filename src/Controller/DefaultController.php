<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    #[route('/blog', name: 'blog', methods:['POST'])]
    public function index()
    {
        return new Response('<h1>Article créé</h1>');
    }

// exercice 1
    // #[route('/accueil', name: 'accueil')]
    // public function index()
    // {
    //     return new Response('<h1>Bienvenue</h1>');
    // }
}