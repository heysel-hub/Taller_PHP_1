<?php
require_once "../clases/Conjuntos.php";
$res = "";
if ($_POST) {
    $a = explode(",", $_POST['a']);
    $b = explode(",", $_POST['b']);
    $obj = new Conjuntos($a, $b);
    $res = "Unión: " . implode(", ", $obj->union()) . "<br>
            Intersección: " . implode(", ", $obj->interseccion()) . "<br>
            A-B: " . implode(", ", $obj->diferenciaAB()) . "<br>
            B-A: " . implode(", ", $obj->diferenciaBA());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conjuntos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Conjuntos</h2>
    <form method="POST">
        <input name="a" placeholder="Conjunto A: 1,2,3">
        <input name="b" placeholder="Conjunto B: 2,3,4">
        <button>Calcular</button>
    </form>
    <p><?= $res ?></p>
</div>
</body>
</html>
