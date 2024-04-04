<?php 
require_once __DIR__ . '/Products.php';
class Beds extends Products {


    public $size;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$size){
        parent::__construct($nome, $descrizione, $prezzo,  $categoria);

        $this->size = $size;
    }
};