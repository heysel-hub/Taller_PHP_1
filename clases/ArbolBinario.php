<?php
require_once "Nodo.php";

class ArbolBinario {
    private $raiz;

    public function __construct() {
        $this->raiz = null;
    }

    public function getRaiz() {
        return $this->raiz;
    }

   
    public function construir($pre, $in, $post) {
        if (count($pre) > 0 && count($in) > 0) {
            $this->raiz = $this->construirPreIn($pre, $in);
        } elseif (count($post) > 0 && count($in) > 0) {
            $this->raiz = $this->construirPostIn($post, $in);
        } elseif (count($pre) > 0 && count($post) > 0) {
            $this->raiz = $this->construirPrePost($pre, $post);
        }
    }

    public function construirPreIn($pre, $in) {
        if (count($pre) == 0) return null;

        $nodo = new Nodo($pre[0]);
        $i = array_search($pre[0], $in);

        $nodo->setIzq($this->construirPreIn(array_slice($pre, 1, $i), array_slice($in, 0, $i)));
        $nodo->setDer($this->construirPreIn(array_slice($pre, $i + 1), array_slice($in, $i + 1)));
        return $nodo;
    }

    public function construirPostIn($post, $in) {
        if (count($post) == 0) return null;

        $raiz = $post[count($post) - 1];
        $nodo = new Nodo($raiz);
        $i = array_search($raiz, $in);

        $nodo->setIzq($this->construirPostIn(array_slice($post, 0, $i), array_slice($in, 0, $i)));
        $nodo->setDer($this->construirPostIn(array_slice($post, $i, count($post) - $i - 1), array_slice($in, $i + 1)));
        return $nodo;
    }

    public function construirPrePost($pre, $post) {
        if (count($pre) == 0) return null;

        $nodo = new Nodo($pre[0]);
        if (count($pre) == 1) return $nodo;

        // pre[1] es la raíz del lado izquierdo; en postorden marca dónde termina ese lado
        $tam = array_search($pre[1], $post) + 1;

        $nodo->setIzq($this->construirPrePost(array_slice($pre, 1, $tam), array_slice($post, 0, $tam)));
        $nodo->setDer($this->construirPrePost(array_slice($pre, 1 + $tam), array_slice($post, $tam, count($post) - $tam - 1)));
        return $nodo;
    }

   
    public function mostrar($nodo, $nivel = 0) {
        if ($nodo == null) return "";

        $resultado = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $nivel) . $nodo->getValor() . "<br>";
        $resultado .= $this->mostrar($nodo->getIzq(), $nivel + 1);
        $resultado .= $this->mostrar($nodo->getDer(), $nivel + 1);
        return $resultado;
    }
}
?>
