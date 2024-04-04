<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {

    #[route('/accueil', name: 'accueil')]
    public function index()
    {
        return new Response('<h1>Bienvenue</h1>');
    }
}