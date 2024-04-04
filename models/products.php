<?php

class Products{

    public $nome;
    public $descrizione;
    public $prezzo;
 
    public $categoria;

    public $image;
    public function __construct($nome, $descrizione, $prezzo, Category $categoria)
    {

        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }


    public function setImage($image) {
        $this->image = $image;
    }


}
