<?php 
require_once __DIR__ . '/Products.php';
require_once __DIR__ .'./../Traits/HasMaterial.php';
class Game extends Products {

    use HasMaterial;


    public function __construct($nome, $descrizione, $prezzo,  $categoria)
    {
        parent::__construct($nome, $descrizione, $prezzo,  $categoria);
    
    }
};