<?php 
require_once __DIR__ . '/Products.php';
class Game extends Products {


    public $materiale;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$materiale)
    {
        parent::__construct($nome, $descrizione, $prezzo,  $categoria);
        $this->materiale = $materiale;
    }
};