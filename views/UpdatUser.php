
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
    <!-- Vos balises head existantes ... -->
</head>

<body>
    <div class="navbar">
        <a href="admin">Retour à la page admin</a>
    </div>

    <main>
        <div class="update-user-container">
            <h3>Modifier un Utilisateur</h3>
            <form method="post">
                <label for="username_to_search">Nom d'Utilisateur:</label>
                <input type="text" name="username_to_search" required>
                <button type="submit" name="search_user">Rechercher l'Utilisateur</button>
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
