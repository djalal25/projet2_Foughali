<?php

$url = $_SERVER['REQUEST_URI'];

$explodeUrl = explode('/',$url);
require_once './controllers/pagesControllers.php';

$pageController = new PageController();

switch ($explodeUrl[2]) {
    case 'home':
        $pageController->home();
        break;

    case 'products':
        $pageController->products();
        break;

    case 'contact':
        $pageController->contact();
        break;

    case 'login':
        $pageController->login();
        break;

    case 'register':
        $pageController->register();
        break;



    default:
        $pageController->home();
        break;
}
