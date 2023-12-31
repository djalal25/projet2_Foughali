<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion Utilisateur</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-image: url('./photo/jordan1.webp');
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 10px;
            text-align: center;
        }

        .navbar a {
            color: #f2f2f2;
            text-decoration: none;
            padding: 14px 16px;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        main {
            margin-top: 2%;
            text-align: center;
        }

        .add-product-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form {
            width: 100%;
            margin-top: 20px;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="admin">Retour à la page admin</a>
        <a href="chercheu">Chercher Utilisateur</a>
        <a href="updateu">Modifier Utilisateur</a>
        <a href="deleteu">Supprimer Utilisateur</a>



    </div>

    
</body>

</html>




