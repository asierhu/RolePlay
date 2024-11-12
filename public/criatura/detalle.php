<?php
require_once '../../src/servicios/criaturaServicio.php';

$servicio = new criaturaServicio();
$id = $_GET['id'];
$criatura = $servicio->detallesDeCriatura($id);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Detalle de <?= $criatura['name'] ?></title>
    </head>
    <body>
        <h1><?= $criatura['name'] ?></h1>
        <img src="<?= $criatura['avatar'] ?>" alt="<?= $criatura['name'] ?>">
        <p><?= $criatura['description'] ?></p>
        <a href="edit.php?id=<?= $id ?>">Editar</a>
        <a href="delete.php?id=<?= $id ?>">Eliminar</a>
    </body>
</html>