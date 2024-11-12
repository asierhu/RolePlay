<?php
require_once '../../src/servicios/criaturaServicio.php';
require_once '../../src/models/criatura.php';

$servicio = new criaturaServicio();
$id = $_GET['id'];
$criatura = $service->detallesDeCriatura($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $edicion = new Criatura($_POST['nombre'], $_POST['description'], $_POST['image_url']);
    $servicio->editCreature($id, $edicion);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar Criatura</title>
    </head>
    <body>
        <form method="POST" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= $criatura['name'] ?>" required>
            <br>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required><?= $criatura['description'] ?></textarea>
            <br>
            <label for="imagen">URL de la Imagen:</label>
            <input type="text" id="imagen" name="imagen" value="<?= $criatura['avatar'] ?>" required>
            <br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </body>
</html>