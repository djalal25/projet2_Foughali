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
     public function adminpage(){
      require('./views/Admin.php');
     }
     public function ajoutProduitpage(){
      require('./views/AjouterProduit.php');
     }
     public function gestionUserpage(){
      require('./views/GestionUser.php');
     }
      
     public function chercherUtilisateurpage(){
      require('./views/FindUser.php');
     }
     public function deleteUserpage(){
      require('./views/DeleteUser.php');
     }
     public function updatUserpage(){
      require('./views/UpdatUser.php');
     }
    
 
   
}
