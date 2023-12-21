<?php
// Inclure la définition de la classe User
require_once('./models/User.php');
// Définir une variable pour stocker les informations de l'utilisateur
$user = null;

// Récupérer les informations de l'utilisateur pour l'affichage
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_user'])) {
    $usernameToSearch = $_POST['username_to_search'];

    // Instancier la classe User
    $userModel = new User();

    // Récupérer les informations de l'utilisateur par nom d'utilisateur
    $user = $userModel->getUserByUsername($usernameToSearch);
}

// Mettre à jour l'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $userId = $_POST['user_identifier'];
    $userData = [
        
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'role_id' => $_POST['role_id'],
    ];

    // Instancier la classe User
    $userModel = new User();

    // Mettre à jour l'utilisateur
    $result = $userModel->updateUserById($userId, $userData);

    if ($result) {
        echo '<div class="alert alert-success" role="alert">Utilisateur mis à jour avec succès!</div>';
        // Rafraîchir les données de l'utilisateur après la mise à jour
        $user = $userModel->getUserById($userId);
    } else {
        echo '<div class="alert alert-danger" role="alert">Échec de la mise à jour de l\'utilisateur.</div>';
    }
}


// Vérifier si le formulaire est soumis //
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $identifier = $_POST['user_identifier']; 

    // Instancier la classe User
    $userModel = new User();

    // Supprimer l'utilisateur par ID ou nom
    $result = $userModel->deleteUser($identifier);

    if ($result) {
        echo '<div class="alert alert-success" role="alert">Utilisateur supprimé avec succès!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Échec de la suppression de l\'utilisateur.</div>';
    }
}
// modifier utilisateur
// Définir une variable pour stocker les informations de l'utilisateur
$user = null;

// Récupérer les informations de l'utilisateur pour l'affichage
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_user'])) {
    $usernameToSearch = $_POST['username_to_search'];

    // Instancier la classe User
    $userModel = new User();

    // Récupérer les informations de l'utilisateur par nom d'utilisateur
    $user = $userModel->getUserByUsername($usernameToSearch);
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer et Modifier un Utilisateur</title>
    <style>
        body {
            display: flex;
            justify-content: space-around;
        }

        .section {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label,
        form input {
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
    <div class="section">
        <h3>Supprimer un Utilisateur</h3>
        <form method="post">
            <label for="user_identifier">ID ou Nom de l'Utilisateur:</label>
            <input type="text" name="user_identifier" required>
            <button type="submit" name="delete_user">Supprimer l'Utilisateur</button>
        </form>
    </div>

    <div class="section">
        <h3>Rechercher un Utilisateur</h3>
        <form method="post">
            <label for="username_to_search">Nom d'Utilisateur:</label>
            <input type="text" name="username_to_search" required>
            <button type="submit" name="search_user">Rechercher l'Utilisateur</button>
        </form>
    </div>

    <?php if ($user): ?>
        <div class="section">
            <h3>Modifier un Utilisateur</h3>
            <form method="post">
                <input type="hidden" name="user_identifier" value="<?php echo $user['id'] ?? ''; ?>">

                <label for="username">Nom d'Utilisateur:</label>
                <input type="text" name="username" value="<?php echo $user['username'] ?? ''; ?>" required>

                <label for="fname">Prénom:</label>
                <input type="text" name="fname" value="<?php echo $user['fname'] ?? ''; ?>" required>

                <label for="lname">Nom:</label>
                <input type="text" name="lname" value="<?php echo $user['lname'] ?? ''; ?>" required>

                <label for="role_id">ID du rôle:</label>
                <input type="text" name="role_id" value="<?php echo $user['role_id'] ?? ''; ?>">

                <button type="submit" name="update_user">Modifier l'Utilisateur</button>
            </form>
        </div>
    <?php endif; ?>

</div>




</body>
</html>
