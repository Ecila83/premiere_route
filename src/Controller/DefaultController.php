<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController {
//Twig
// exercice 3
const users = [
    ['id' => 12, 'name' => 'Paul'],
    ['id' => 14, 'name' => 'Jean'],
    ['id' => 22, 'name' => 'Marie'],
    ['id' => 1, 'name' => 'Sophie'],
];
    #[Route(path: '/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', ['users' => self::users]);
    }

    #[Route('/{id}', name: 'profile')]
    public function profile(string $id): Response
    {
        $userIndex = array_search($id, array_column(self::users, 'id'));
        if ($userIndex === false) {
            throw $this->createNotFoundException('L\'utilisateur n\'existe pas !');
        }
        return $this->render('user_profile.html.twig', ['user' => self::users[$userIndex]]);
    }
// exercice 2
// #[Route('/', name: 'index')]
//     public function index(): Response
//     {
//         $utilisateurs = [
//             ['prenom' => 'Jean', 'nom' => 'Dupont'],
//             ['prenom' => 'Marie', 'nom' => 'Jeanne'],
//             ['prenom' => 'Philippe', 'nom' => 'Moris'],
//         ];
//         return $this->render('test.html.twig', ['utilisateurs' => $utilisateurs]);
//     }
// exercice 1
// #[route('/', name: 'animaux')]
// public function animaux(){
//     $animaux = [
//         'Chien',
//         'Chat',
//         'Lapin'
//     ];
//     return $this->render('/test.html.twig', ['animaux' => $animaux]);
//     }


//Route
// exercice 6
    // #[Route('/article/{title}', name: 'article', methods:['GET'])]
    // public function article(string $title )
    // {   
    //     if (in_array($title, ['jambon', 'pain', 'carotte'])) {
    //         return new Response('<h1>Article ' . $title. '</h1>');
    //     } else {
    //         throw $this->createNotFoundException('Aucun article');     
    //     }
    //  }
// exercice 5
    // #[route('/accueil', name: 'accueil')]
    // public function index()
    // {
    //     return new Response('<h1>Bienvenue</h1>');
    // }

// exercice 4
    // #[Route('/blog/{title}', name: 'blog', methods:['GET'],requirements:['title' => '[\p{L}\-]+'])]
    // public function blog(string $title){
    //     if (!preg_match('/^[\p{L}_\-]+$/u', $title)) {
    //         return new JsonResponse(['error' => 'Paramètre de titre invalide.'], Response::HTTP_BAD_REQUEST);
    //     }
    //     $title = str_replace('-', ' ',$title);
    //     return new Response('<h1>Titre : ' . $title . '</h1>');
    // }

// exercice 3
    // #[Route('/animal/{animal?}', name: 'animal', methods:['GET'])]
    // public function animal(string $animal = null)
    // {   
    //     if ($animal !== null) {
    //         return new Response('<h1>Animal : ' . $animal . '</h1>');
    //     } else {
    //         return new Response('<h1>Tous les animaux</h1>');        
    //     }
    //  }

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