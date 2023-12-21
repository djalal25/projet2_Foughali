<?php
// Inclure la définition de la classe User
require_once('./models/User.php');

 //supprimer utilisateur 
// Définir une variable pour stocker les messages de résultat
$resultMessage = '';

// Supprimer l'utilisateur si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $usernameToDelete = $_POST['user_identifier'];

    // Instancier la classe User
    $userModel = new User();

    // Supprimer l'utilisateur par nom d'utilisateur
    $result = $userModel->deleteUserByUsername($usernameToDelete);

    if ($result) {
        $resultMessage = '<div class="alert alert-success" role="alert">Utilisateur supprimé avec succès!</div>';
    } else {
        $resultMessage = '<div class="alert alert-danger" role="alert">Échec de la suppression de l\'utilisateur.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un Utilisateur</title>
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

    <main>
        <div class="add-product-container">
            <h3>Supprimer un Utilisateur</h3>
            <?php echo $resultMessage; // Afficher le message de résultat ?>
            <form method="post">
                <div class="mb-3">
                    <label for="user_identifier">ID ou Nom d'Utilisateur:</label>
                    <input type="text" name="user_identifier" required>
                </div>

                <button type="submit" name="delete_user">Supprimer l'Utilisateur</button>
            </form>
        </div>
    </main>
</body>

</html>




