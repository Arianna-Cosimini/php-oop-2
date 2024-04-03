<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'models/products.php';
require 'models/game.php';
require 'models/food.php';
require 'models/beds.php';
require 'models/category.php';

$cats = new Category("gatti");
$dogs = new Category("cani");


// giochi 
$game1= new Game("Pallina", "Pallina piccola per gatti",5, $cats, "" );
$game2= new Game("Pallina", "Pallina per cani",5, $dogs, "" );
$game2= new Game("Pesciolino", "Pesciolino per gatti",5, $cats, "" );
$game2= new Game("Pupazzino", "Pupazzino per cani",5, $dogs, "" );


// mangiare
$food1= new Food("Croccantini","Croccantini per gatti",8,$cats,"");
$food2= new Food("Croccantini","Croccantini per cane",8,$dogs,"");
$food3= new Food("Carne","Carne per gatti",8,$cats,"");
$food4= new Food("Carne","Carne per cani",8,$dogs,"");


$products=[
    $game1,$game2
];

var_dump($game1);
var_dump($game2);



?>







<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
</head>
<body>
    
</body>
</html>