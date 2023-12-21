
<?php
// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inclure la définition de la classe Product
    require_once('./models/Produits.php');
    
    // Instancier la classe Product
    $productModel = new Product();

    // Récupérer les données du formulaire
    $productData = [
        'name' => $_POST['name'],
        'qtty' => $_POST['qtty'],
        'price' => $_POST['price'],
        'url_img' => $_POST['url_img'], // Assurez-vous de valider et de traiter correctement les fichiers téléchargés
        'description' => $_POST['description'],
    ];

    // Ajouter le produit
    $result = $productModel->addProduct($productData);

    if ($result) {
        echo '<div class="alert alert-success" role="alert">Produit ajouté avec succès!</div>';
    } 
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        main {
            margin-top: 2%;
        }

        .add-product-container {
            text-align: center;
        }

        .container {
            margin: auto;
        }

        form {
            width: 50%;
            margin: auto;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        textarea {
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
            float: right; 
            margin-right: 10px; 
        }
    </style>
</head>

<body>
<div class="navbar">
        <a href="admin">Retour a la page admin</a>
        
        
    </div>

    <main>
        <section class="add-product-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h3 style="margin-top: 2%;">Ajouter un Produit</h3>
                        <form method="post">
                            <div class="mb-3">
                                <label for="productName">Nom du Produit</label>
                                <input type="text" name="name" id="productName" placeholder="Nom du produit" required>
                            </div>
                            <div class="mb-3">
                                <label for="productQtty">Quantité</label>
                                <input type="number" name="qtty" id="productQtty" placeholder="Quantité" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice">Prix</label>
                                <input type="number" name="price" id="productPrice" placeholder="Prix" required>
                            </div>
                            <div class="mb-3">
                                <label for="productImage">URL de l'Image</label>
                                <input type="text" name="url_img" id="productImage" placeholder="URL de l'image" required>
                            </div>
                            <div class="mb-3">
                                <label for="productDescription">Description</label>
                                <textarea name="description" id="productDescription" placeholder="Description" required></textarea>
                            </div>
                            <div class="container">
                                <button type="submit">Ajouter le Produit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

</body>

</html>
