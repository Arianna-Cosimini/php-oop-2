<?php 

class Food extends Products {


    public $food;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$food){
        parent::__construct($nome, $descrizione, $prezzo,  $categoria,$food);
    }
};