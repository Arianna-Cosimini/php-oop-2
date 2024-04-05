<?php 
require_once __DIR__ . '/Products.php';
require_once __DIR__ .'./../Traits/HasDimension.php';
class Food extends Products {

    use HasDimension;

    public $ingredient;
    public $expireDate;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$ingredient,$expireDate){
        parent::__construct($nome, $descrizione, $prezzo,  $categoria);


        // $this->weight = $weight;
        $this->expireDate = $expireDate;
        $this->ingredient = $ingredient;
    }
};