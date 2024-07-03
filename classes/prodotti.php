<?php

class Prodotti {

    public $titolo;
    public $prezzo;
    public $categoria;
    public $codice;

    public function __construct($titolo, $prezzo, $categoria, $codice)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->codice = $codice;
    }

}