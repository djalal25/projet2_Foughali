<?php

class PageController
{
    public function home()
    {
        echo '<h1>Accueil</h1>';

        require_once('./views/home.php');
        // Ajoutez ici le code pour la page d'accueil
    }

    public function products()
    {
        echo '<h1>Produits</h1>';
        // Ajoutez ici le code pour la page des produits
    }

    public function contact()
    {
        echo '<h1>Contact</h1>';
        // Ajoutez ici le code pour la page de contact
    }

    public function login()
    {
        require_once('./views/connexion.php');


        // Ajoutez ici le code pour la page de connexion
    }

    public function register()
    {
        require_once("./views/Register.php");
        echo '<h1>Inscription</h1>';
        // Ajoutez ici le code pour la page d'inscription
    }
}
