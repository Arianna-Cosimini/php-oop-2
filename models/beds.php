<?php 
require_once __DIR__ . '/Products.php';
require_once __DIR__ .'./../Traits/HasMaterial.php';
require_once __DIR__ .'./../Traits/HasDimension.php';

class Beds extends Products {

    use HasMaterial;
    use HasDimension;
    public $size;


    public function __construct($nome, $descrizione, $prezzo,  $categoria,$size){
        parent::__construct($nome, $descrizione, $prezzo,  $categoria);

        $this->size = $size;
    }
};