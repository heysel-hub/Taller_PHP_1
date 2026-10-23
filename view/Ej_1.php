<?php
require_once "../clases/Acronimo.php";
$resultado = "";
if ($_POST) {
    $obj = new Acronimo($_POST['frase']);
    $resultado = $obj->generar();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acrónimo</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Acrónimo</h2>
    <form method="POST">
        <input type="text" name="frase" placeholder="Ingrese la frase">
        <button>Generar</button>
    </form>
    <h3><?= $resultado ?></h3>
</div>
</body>
</html>
