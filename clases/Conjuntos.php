<?php
class Conjuntos {
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function setA($a) {
        $this->a = $a;
    }

    public function setB($b) {
        $this->b = $b;
    }

    public function union() {
        $resultado = [];
        foreach ($this->a as $x) {
            if (!in_array($x, $resultado)) {
                $resultado[] = $x;
            }
        }
        foreach ($this->b as $x) {
            if (!in_array($x, $resultado)) {
                $resultado[] = $x;
            }
        }
        return $resultado;
    }

    public function interseccion() {
        $resultado = [];
        foreach ($this->a as $x) {
            if (in_array($x, $this->b) && !in_array($x, $resultado)) {
                $resultado[] = $x;
            }
        }
        return $resultado;
    }

    public function diferenciaAB() {
        $resultado = [];
        foreach ($this->a as $x) {
            if (!in_array($x, $this->b) && !in_array($x, $resultado)) {
                $resultado[] = $x;
            }
        }
        return $resultado;
    }

    public function diferenciaBA() {
        $resultado = [];
        foreach ($this->b as $x) {
            if (!in_array($x, $this->a) && !in_array($x, $resultado)) {
                $resultado[] = $x;
            }
        }
        return $resultado;
    }
}
?>
