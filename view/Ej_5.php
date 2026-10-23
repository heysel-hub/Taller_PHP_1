<?php
require_once "../clases/Binario.php";
$res = "";
if ($_POST) {
    $obj = new Binario($_POST['n']);
    $res = $obj->convertir();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Convertir a Binario</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Convertir a Binario</h2>
    <form method="POST">
        <input type="number" name="n">
        <button>Convertir</button>
    </form>
    <p><?= $res ?></p>
</div>
</body>
</html>
