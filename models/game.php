<?php 

class Game extends Products {


    public $game;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$game)
    {
        parent::__construct($nome, $descrizione, $prezzo,  $categoria,$game);
    }
};