<?php

require_once('./controllers/UserController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController = new AuthController();
    $result = $authController->signup($_POST);

    if ($result['success']) {
        header("Location: login");
        exit();
    } else {
        $errorMessage = $result['message'];
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="cache-control" content="no-cache">
    <title>Baskets</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="login" style="font-size: 18px;"> Connexion</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="register" style="font-size: 18px;">S'inscrire</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="accueil" style="font-size: 18px;"> Accueil</a>
                    </li>
                </ul>
            </div>
        </nav>
        <style>
            body {

                background-image: url('./photo/jordan2.webp');

            }

            .login-container {
                width: 100%;
                max-width: 400px;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: auto;
                margin-top: 50px;
            }
        </style>
    </header>


<body>

    <main>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="login-container">

                            <center>
                                <h3 class="mb-3" style="margin-top: 2%;"><b>INSCRIPTION</b></h3>
                            </center>

                            <form method="post">
                                <!-- User Information -->
                                <div class="container-box">
                                    <hr>
                                    <br>
                                    <div class="mb-3">

                                        <label for="email" class="form-label"><b>Email</b></label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fname" class="form-label"><b>First Name</b></label>
                                                <input type="text" class="form-control" id="fname" name="fname" required placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lname" class="form-label"><b>Last Name</b></label>
                                                <input type="text" class="form-control" id="lname" name="lname" required placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label"><b>Username</b></label>
                                        <input type="text" class="form-control" id="username" name="username" required placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label"><b>Password</b></label>
                                        <input type="password" class="form-control" id="password" name="password" required placeholder="">
                                    </div>
                                </div>

                                <?php if (isset($errorMessage)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $errorMessage; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="container" style="text-align: center;">
                                    <button type="submit" name="register" class="btn btn-warning btn-md">Inscription</button>
                                    <div class="mt-3">
                                        <p>Avez vous deja un compte? <a href="login" style="color: navy; font-weight:bold; text-decoration:none;"><b>Connexion</b></a></p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>