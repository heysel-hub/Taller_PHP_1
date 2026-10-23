<?php
class Binario {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function convertir() {
        $n = $this->numero;
        if ($n == 0) {
            return "0";
        }

        $binario = "";
        while ($n > 0) {
            $binario = ($n % 2) . $binario;
            $n = intdiv($n, 2);
        }
        return $binario;
    }
}
?>
