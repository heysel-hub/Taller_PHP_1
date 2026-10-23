<?php
class Calculadora {
    private $historial;

    public function __construct($historial) {
        $this->historial = $historial;
    }

    public function getHistorial() {
        return $this->historial;
    }

    public function borrarHistorial() {
        $this->historial = [];
    }

    public function operar($a, $b, $op) {
        switch ($op) {
            case '+':
                $resultado = $a + $b;
                break;
            case '-':
                $resultado = $a - $b;
                break;
            case '*':
                $resultado = $a * $b;
                break;
            case '/':
                $resultado = ($b != 0) ? $a / $b : "Error";
                break;
            case '%':
                $resultado = ($a * $b) / 100;
                break;
        }
        $this->historial[] = "$a $op $b = $resultado";
        return $resultado;
    }
}
?>
