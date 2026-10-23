<?php
class Acronimo {
    private $frase;

    public function __construct($frase) {
        $this->frase = $frase;
    }

    public function getFrase() {
        return $this->frase;
    }

    public function setFrase($frase) {
        $this->frase = $frase;
    }

    public function generar() {
       
        $limpia = preg_replace("/[^a-zA-Z\s-]/", "", $this->frase);
     
        $palabras = preg_split("/[\s-]+/", trim($limpia));

        $acronimo = "";
        foreach ($palabras as $palabra) {
            $acronimo .= strtoupper($palabra[0]);
        }
        return $acronimo;
    }
}
?>
