<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require 'models/products.php';
require 'models/game.php';
require 'models/food.php';
require 'models/beds.php';
require 'models/category.php';

$cats = new Category("gatti","fa-cat");
$dogs = new Category("cani","fa-dog");


// giochi 
$catBall = new Game("Pallina", "Pallina piccola per gatti", 5, $cats, "plastica");
$catBall->setImage("https://tse1.mm.bing.net/th?id=OIP.GKZn7KGhSdUD1V6-h3ITHAHaHa&pid=Api&P=0&h=180");

$dogBall = new Game("Pallina", "Pallina per cani", 5, $dogs, "plastica");
$dogBall->setImage("https://tse2.mm.bing.net/th?id=OIP.rtItyQ9TpmrguWqiYEOiHAHaHi&pid=Api&P=0&h=180");

$fishCat = new Game("Pesciolino", "Pesciolino per gatti", 5, $cats, "Tessuto");
$fishCat->setImage("https://www.galleranistore.it/media/catalog/product/cache/1/image/600x/040ec09b1e35df139433887a97daa66f/g/i/gioco_per_gatti_pesciolino_colorato.jpg");

$puppetDog = new Game("Pupazzino", "Pupazzino per cani", 5, $dogs, "Tessuto");
$puppetDog->setImage("https://m.media-amazon.com/images/I/51tct8tiWdL.jpg");


// mangiare
$kibbleCat = new Food("Croccantini", "Croccantini per gatti", 8, $cats, "pesce", 1.5, 24.12);
$kibbleCat->setImage("https://www.ptagencynews.it/wp-content/uploads/2021/07/trainer-natural-cibo-per-gatti-adulti-sterilizzati-alimento-secco-con-776x1024.jpg");

$kibbleDog = new Food("Croccantini", "Croccantini per cane", 8, $dogs, "pollo", 3, 07.05);
$kibbleDog->setImage("https://www.braccobaldoshop.com/616-large_default/prolife-croccantini-cane-adult-medium-large-sensitive-maiale-e-riso-25-kg.jpg");

$meatCat = new Food("Bocconcini di carne", "Bocconcini di carne per gatti", 8, $cats, "tacchino", 0.25, 06.11);
$meatCat->setImage("https://tse1.mm.bing.net/th?id=OIP.oCRH28ocNOlvsAwItQcBFwAAAA&pid=Api&P=0&h=180");

$meatDog = new Food("Bocconcini di carne", "Bocconcini di carne per cani", 8, $dogs, "agnello", 0.50, 24.03);
$meatDog->setImage("https://www.soloimigliori.it/wp-content/uploads/2020/04/cesar-cibo-per-cani.jpg");

// cuccia

$kennelDog = new Beds("Cuccia", "Cuccia per cane", 50, $dogs, "large");
$kennelDog->setImage("https://www.brico.it/wp-content/uploads/2016/11/Cuccia-per-cani-beddog.jpg");

$kennelCat = new Beds("Cuccia", "Cuccia per gatto", 50, $cats, "small");
$kennelCat->setImage("https://tse2.mm.bing.net/th?id=OIP.2sPxFUTysCUveBNUYkkHCAHaE8&pid=Api&P=0&h=180");


$products = [
    $catBall,
    $dogBall,
    $fishCat,
    $puppetDog,
    $kibbleCat,
    $kibbleDog,
    $meatCat,
    $meatDog,
    $kennelCat,
    $kennelDog

];


?>







<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Shop</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <style>
        .card .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <h1>
            PHP - Shop
        </h1>

        <div class="row row-cols-2 row-gap-4">

            <?php
            foreach ($products as $product) {
            ?>
                <div class="col">
                    <div class="card">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between ">
                                <span><?= $product->descrizione ?></span>
                                
                            </h5>
                           
                            <p class="card-text">€<?= $product->prezzo ?></p>
                            <a href="#" class="btn btn-primary">Acquista</a>

                            <div class="details">
                                <ul>
                                    <?php

                                    // controlliamo di che tipo sia il prodotto
                                    if ($product instanceof Food) {
                                        echo '<li>Peso: ' . $product->weight . 'kg</li>';
                                        echo '<li>Ingrediente principale: ' . $product->ingredient . '</li>';
                                    } else if ($product instanceof Game) {

                                        echo '<li>Materiale: ' . $product->materiale . '</li>';
                                    } else if ($product instanceof Beds) {

                                        echo '<li>Taglia ' . $product->size . '</li>';
                                    }


                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }

            ?>


        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>