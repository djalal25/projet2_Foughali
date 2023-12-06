<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('./imageHome/jordan.jpeg');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            height: 90vh;
        }

        #content {
            min-height: 100vh;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>

    <!-- Barre de navigation -->
    <nav>
        <a href="home">Accueil</a>
        <a href="produits">Produits</a>
        <a href="login">connexion</a>
        <a href="register">Inscription</a>



    </nav>