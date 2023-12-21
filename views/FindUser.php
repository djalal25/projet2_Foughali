<?php
// Inclure la définition de la classe User
require_once('./models/User.php');

// Définir une variable pour stocker les informations de l'utilisateur
$user = null;

// Récupérer les informations de l'utilisateur pour l'affichage
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_user'])) {
    $identifierToSearch = $_POST['user_identifier'];

    // Instancier la classe User
    $userModel = new User();

    // Vérifier si l'identifiant est un nombre (ID) ou une chaîne (nom d'utilisateur)
    if (is_numeric($identifierToSearch)) {
        // Rechercher l'utilisateur par ID
        $user = $userModel->getUserById($identifierToSearch);
    } else {
        // Rechercher l'utilisateur par nom d'utilisateur
        $user = $userModel->getUserByUsername($identifierToSearch);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher un Utilisateur</title>
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
            padding: 15px;
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

        .search-user-container {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 50%;
            margin: auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
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

        .user-info {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h4 {
            margin-top: 0;
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

    <div class="search-user-container">
        <h3>Rechercher un Utilisateur</h3>
        <form method="post">
            <div class="mb-3">
                <label for="user_identifier">ID ou Nom d'Utilisateur:</label>
                <input type="text" name="user_identifier" required>
            </div>

            <button type="submit" name="search_user">Rechercher l'Utilisateur</button>
        </form>

        <?php if ($user): ?>
            <div class="user-info">
                <h4>Informations de l'Utilisateur</h4>
                <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
                <p><strong>Nom d'utilisateur:</strong> <?php echo $user['username']; ?></p>
                <p><strong>Prénom:</strong> <?php echo $user['fname']; ?></p>
                <p><strong>Nom:</strong> <?php echo $user['lname']; ?></p>
                <p><strong>email:</strong> <?php echo $user['email']; ?></p>
                <p><strong>Role:</strong> <?php echo $user['role_id']; ?></p>
                <!-- Ajoutez d'autres informations de l'utilisateur ici -->
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
