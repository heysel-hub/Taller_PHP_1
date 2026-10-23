<?php
class Estadistica {
    private $numeros;

    public function __construct($numeros) {
        $this->numeros = $numeros;
    }

    public function getNumeros() {
        return $this->numeros;
    }

    public function setNumeros($numeros) {
        $this->numeros = $numeros;
    }

    public function promedio() {
        $suma = 0;
        foreach ($this->numeros as $num) {
            $suma += $num;
        }
        return $suma / count($this->numeros);
    }

  
    public function media() {
        $orden = $this->numeros;
        sort($orden);
        $cantidad = count($orden);
        $mitad = intdiv($cantidad, 2);

        if ($cantidad % 2 == 0) {
            return ($orden[$mitad - 1] + $orden[$mitad]) / 2;
        }
        return $orden[$mitad];
    }

  
    public function moda() {
        $moda = $this->numeros[0];
        $maxRepeticiones = 0;

        foreach ($this->numeros as $num) {
            $repeticiones = 0;
            foreach ($this->numeros as $otro) {
                if ($num == $otro) {
                    $repeticiones++;
                }
            }
            if ($repeticiones > $maxRepeticiones) {
                $maxRepeticiones = $repeticiones;
                $moda = $num;
            }
        }
        return $moda;
    }
}
?>
