<?php

class Products
{

    public $nome;
    public $descrizione;
    public $prezzo;
    public $immagine;
    public $categoria;
    public $tipologia;

    public function __construct($id, $nome, $descrizione, $prezzo, $immagine, $categoria, $tipologia)
    {

        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipologia = $tipologia;
    }



}
