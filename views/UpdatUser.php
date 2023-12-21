
<?php
// Inclure la définition de la classe User
require_once('./models/User.php');

// Définir une variable pour stocker les messages de résultat
$resultMessage = '';

// Récupérer les informations de l'utilisateur pour l'affichage
$user = null; // Initialiser la variable $user à null

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_user'])) {
    $usernameToSearch = $_POST['username_to_search'];

    // Instancier la classe User
    $userModel = new User();

    // Récupérer les informations de l'utilisateur par nom d'utilisateur
    $user = $userModel->getUserByUsername($usernameToSearch);
}

// Mettre à jour l'utilisateur si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $userId = $_POST['user_id'];
    $userData = [
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'role_id' => $_POST['role_id'],
        // Ajoutez d'autres champs de formulaire si nécessaire
    ];

    // Instancier la classe User
    $userModel = new User();

    // Mettre à jour l'utilisateur
    $result = $userModel->updateUserById($userId, $userData);

    if ($result) {
        // Rafraîchir les données de l'utilisateur après la mise à jour
        $user = $userModel->getUserById($userId);
        $resultMessage = '<div class="alert alert-success" role="alert">Utilisateur mis à jour avec succès!</div>';
    } else {
        // Gérer l'échec de la mise à jour, si nécessaire
        $resultMessage = '<div class="alert alert-danger" role="alert">Échec de la mise à jour de l\'utilisateur.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Utilisateur</title>
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

        .update-user-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            width: 100%;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
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

        .alert {
            margin-top: 20px;
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
        <div class="update-user-container">
            <h3>Modifier un Utilisateur</h3>

            <form method="post">
                <label for="username_to_search">Nom d'Utilisateur:</label>
                <input type="text" name="username_to_search" required>
                <button type="submit" name="search_user">Chercher l'Utilisateur à modifier</button>
            </form>

            <?php if ($user): ?>
                <?php echo $resultMessage; ?>
                <form method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                    <label for="fname">Prénom:</label>
                    <input type="text" name="fname" value="<?php echo $user['fname']; ?>" required>
                    <label for="lname">Nom:</label>
                    <input type="text" name="lname" value="<?php echo $user['lname']; ?>" required>
                    <label for="role_id">ID du rôle:</label>
                    <input type="text" name="role_id" value="<?php echo $user['role_id']; ?>" required>
                    <!-- Ajoutez d'autres champs de formulaire si nécessaire -->
                    <button type="submit" name="update_user">Mettre à jour l'Utilisateur</button>
                </form>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>
