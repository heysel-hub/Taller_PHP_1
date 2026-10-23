<?php
require_once "../clases/ArbolBinario.php";
$resultado = "";
if ($_POST) {
    $pre = [];
    $in = [];
    $post = [];
    if ($_POST['preorden'] != "") $pre = explode(",", str_replace(" ", "", $_POST['preorden']));
    if ($_POST['inorden'] != "") $in = explode(",", str_replace(" ", "", $_POST['inorden']));
    if ($_POST['postorden'] != "") $post = explode(",", str_replace(" ", "", $_POST['postorden']));

    $arbol = new ArbolBinario();
    $arbol->construir($pre, $in, $post);
    $resultado = $arbol->mostrar($arbol->getRaiz());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Árbol Binario</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Construcción Árbol Binario</h2>
    <p>Ingrese al menos dos recorridos separados por coma. Si ingresa los tres se usan preorden e inorden.</p>
    <form method="POST">
        <label>Preorden:</label>
        <input type="text" name="preorden" placeholder="A,B,D,E,C">
        <label>Inorden:</label>
        <input type="text" name="inorden" placeholder="D,B,E,A,C">
        <label>Postorden:</label>
        <input type="text" name="postorden" placeholder="D,E,B,C,A">
        <button>Construir Árbol</button>
    </form>

    <h3>Resultado:</h3>
    <div>
        <?= $resultado ?>
    </div>
</div>
</body>
</html>
