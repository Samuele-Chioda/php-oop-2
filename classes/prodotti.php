<?php
class Prodotti
{
    public $titolo;
    public $prezzo;
    public $categoria;
    private $codice;

    public function __construct($titolo, $prezzo, $categoria, $codice)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->codice = $codice;
    }

    private function getCodice()
    {
        return $this->codice;
    }

    public function getDettagli()
    {
        return [
            'titolo' => $this->titolo,
            'prezzo' => $this->prezzo,
            'categoria' => $this->categoria->nome,
            'codice' => $this->getCodice(),
        ];
    }
}
?>
