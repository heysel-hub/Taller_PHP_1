<?php
require_once "../clases/Estadistica.php";
$res = "";
if ($_POST) {
    $nums = explode(",", $_POST['nums']);
    $obj = new Estadistica($nums);
    $res = "Promedio: " . $obj->promedio() . "<br>
            Media: " . $obj->media() . "<br>
            Moda: " . $obj->moda();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadística</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Estadística</h2>
    <form method="POST">
        <input type="text" name="nums" placeholder="1,2,3,4">
        <button>Calcular</button>
    </form>
    <p><?= $res ?></p>
</div>
</body>
</html>
