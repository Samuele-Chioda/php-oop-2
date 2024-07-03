<?php

class Categorie {
    public $nome;
    public $immagine;

    public function __construct($nome, $immagine) 
    {
        $this->nome = $nome;
        $this->immagine = $immagine;
    }
}

?>