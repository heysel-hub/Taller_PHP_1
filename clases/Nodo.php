<?php
class Nodo {
    private $valor;
    private $izq;
    private $der;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getIzq() {
        return $this->izq;
    }

    public function getDer() {
        return $this->der;
    }

    public function setIzq($nodo) {
        $this->izq = $nodo;
    }

    public function setDer($nodo) {
        $this->der = $nodo;
    }
}
?>
