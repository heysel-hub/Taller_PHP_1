<?php
class FibonFacto {
    private $n;

    public function __construct($n) {
        $this->n = $n;
    }

    public function getN() {
        return $this->n;
    }

    public function setN($n) {
        $this->n = $n;
    }

    public function fibonacci() {
        $serie = [];
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $this->n; $i++) {
            $serie[] = $a;
            $siguiente = $a + $b;
            $a = $b;
            $b = $siguiente;
        }
        return $serie;
    }

    public function factorial() {
        $serie = [];
        $fact = 1;
        for ($i = 1; $i <= $this->n; $i++) {
            $fact = $fact * $i;
            $serie[] = $fact;
        }
        return $serie;
    }
}
?>
