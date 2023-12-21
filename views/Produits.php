<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page PHP</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
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
        <a href="login">Connexion</a>
        <a href="register">S'enregistrer</a>
        <a href="">Déconnexion</a>
        </li>
                    <li class="nav-item">
                    <li><a href="./panier.php" class="btn btn-primary"><i class="bi bi-cart4"></i><??></a></li>
                    </li>
    </div>

    <main>
        <!-- Products Section -->
        <section class="product-container" style="margin-top: 2%;">
            <div class="container">
                <div class="row">
                    <?php
                    // Inclure la définition de la classe Product
                    require_once('./models/Produits.php');
                    // Instancier la classe Product
                    $productModel = new Product();

                    // Récupérer tous les produits
                    $products = $productModel->getAllProducts();

                   
                    // Afficher les produits
                    foreach ($products as $product) :
                        //var_dump($product['url_img']);


                    ?>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="./photo/<?php echo $product['url_img'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product['name'] ?></h5>
                                    <p class="card-text">Price: $<?= $product['price'] ?></p>
                                    <p class="card-text">Quantity: <?= $product['qtty'] ?></p>
                                    <p class="card-text"><?= $product['description'] ?></p>
                                    <center><a href="ProductDetails.php?id=<?= $product['id'] ?>" class="btn btn-warning">View Product</a></center>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Ajoutez ici vos scripts JavaScript ou d'autres dépendances -->

</body>

</html>