<?php
require_once('controllers/PageController.php');

$url = $_SERVER['REQUEST_URI'];
//echo 'REQUEST_URI : ' . $_SERVER['REQUEST_URI'];

//$urltrim = ltrim($url, '/ecom-2/mvc/');
$explodeUrl = explode('/', $url);
var_dump($explodeUrl[2]);
switch ($explodeUrl[2]) {
    case 'register':
        $page = new PageController;
        $page->registerpage();

        break;
    case 'login':
        $page = new PageController;
        $page->loginPage();
        break;
        
        case 'produit':
            $page = new PageController;
            $page->produitspage();
            break;

        default:
         $page = new PageController;
         $page->homePage();
        break;
}
