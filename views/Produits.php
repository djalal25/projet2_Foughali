<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <!-- Ajoutez ici vos liens vers des fichiers CSS ou d'autres dépendances -->
</head>

<body>

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

                    var_dump("je suis dans ma view produits");
                    // Afficher les produits
                    foreach ($products as $product) :
                        var_dump($product['url_img']);


                    ?>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="../photo/<?php echo $product['url_img'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
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