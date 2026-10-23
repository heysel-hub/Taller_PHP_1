<?php
require_once "../clases/Calculadora.php";
session_start();
if (!isset($_SESSION['historial'])) $_SESSION['historial'] = [];

$obj = new Calculadora($_SESSION['historial']);

if ($_POST) {
    if (isset($_POST['borrar'])) {
        $obj->borrarHistorial();
    } else {
        $obj->operar($_POST['a'], $_POST['b'], $_POST['op']);
    }
    $_SESSION['historial'] = $obj->getHistorial();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Calculadora</h2>
    <form method="POST">
        <input type="number" name="a" step="any">
        <select name="op">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" name="b" step="any">
        <button>Calcular</button>
        <button name="borrar">Borrar Historial</button>
    </form>
    <h3>Historial</h3>
    <?php foreach ($obj->getHistorial() as $h) { echo $h . "<br>"; } ?>
</div>
</body>
</html>
