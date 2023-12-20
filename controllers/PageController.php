<?php


class PageController
{


    public function homepage()
    {
        require('./views/Accueil.php');
    }
     public function loginPage(){
        require('./views/Login.php');
     }
     public function registerpage(){
        require('./views/Register.php');
     }
     public function produitspage(){
        require('./views/Produits.php');
     }
}
