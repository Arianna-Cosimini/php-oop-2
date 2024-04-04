<?php 
require_once __DIR__ . '/Products.php';
class Food extends Products {


    public $ingredient;
    public $weight;
    public $expireDate;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$ingredient,$weight,$expireDate){
        parent::__construct($nome, $descrizione, $prezzo,  $categoria);


        $this->weight = $weight;
        $this->expireDate = $expireDate;
        $this->ingredient = $ingredient;
    }
};