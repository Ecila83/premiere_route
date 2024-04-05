<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController {
    #[Route('/animal/{animal?}', name: 'animal', methods:['GET'])]
    public function animal(string $animal = null)
    {   
        if ($animal !== null) {
            return new Response('<h1>Animal : ' . $animal . '</h1>');
        } else {
            return new Response('<h1>Tous les animaux</h1>');        
        }
}

// exercice 2
    // #[route('/blog', name: 'blog', methods:['POST'])]
    // public function index()
    // {
    //     return new Response('<h1>Article créé</h1>');
    // }

// exercice 1
    // #[route('/accueil', name: 'accueil')]
    // public function index()
    // {
    //     return new Response('<h1>Bienvenue</h1>');
    // }
}