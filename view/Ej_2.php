<?php
require_once "../clases/FiboFacto.php";
$resultado = "";
if ($_POST) {
    $obj = new FibonFacto($_POST['numero']);
    if ($_POST['tipo'] == "fib") {
        $resultado = implode(", ", $obj->fibonacci());
    } else {
        $resultado = implode(", ", $obj->factorial());
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci / Factorial</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php" class="boton-menu">⬅ Volver al menú</a>
<div class="container">
    <h2>Fibonacci / Factorial</h2>
    <form method="POST">
        <input type="number" name="numero">
        <select name="tipo">
            <option value="fib">Fibonacci</option>
            <option value="fact">Factorial</option>
        </select>
        <button>Calcular</button>
    </form>
    <p><?= $resultado ?></p>
</div>
</body>
</html>
