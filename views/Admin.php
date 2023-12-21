<?php  
require_once('./controllers/session.php');


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page PHP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar form {
            float: right; /* Aligner le formulaire à droite */
            margin-right: 10px; /* Marge pour l'espacement */
        }

        .navbar button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .navbar button:hover {
            background-color: #45a049;
        }

        .content-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            color: white;
            border: 2px solid black;
            border-radius: 10px;
        }

        .text-box,
        .image-box {
            width: 48%;
        }

        .text-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            color: white;
            border: 2px solid black;
            border-radius: 10px;
        }

        .text-box h2 {
            margin-bottom: 10px;
            color: black;
        }

        .text-box p {
            color: black;
        }

        .image-box img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="ajoutP">Gestion Produit</a>
        <a href="gestionUs">Gestion Utilisateurs</a>
        <form action="logout.php" method="post">
            <button type="submit" name="logout">Déconnexion</button>
        </form>
    </div>

    <div class="content-box">
        <div class="text-box">
            <h2>Super Administrateur</h2>
            <div>
                <p>Bienvenu</p>
            </div>
        </div>

        <div class="image-box">
            <img src="photo/jordan1.webp" alt="Exemple d'image">
        </div>
    </div>

</body>

</html>
