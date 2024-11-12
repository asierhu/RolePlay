<?php
require_once '../../src/servicios/criaturaServicio.php';
require_once '../../src/models/criatura.php';

$servicio = new criaturaServicio();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $criatura = new Criatura($_POST['nombre'], $_POST['description'], $_POST['imagen']);
    $servicio->addCreature($criatura);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Crear Criatura</title>
    </head>
    <body>
        <form method="POST" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required></textarea>
            <br>
            <label for="imagen">URL de la Imagen:</label>
            <input type="text" id="imagen" name="imagen" required>
            <br>
            <button type="submit">Crear</button>
        </form>
    </body>
</html>