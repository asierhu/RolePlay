<?php
require_once '../../src/controllers/criaturaController.php';

$controller = new criaturaController();
$creatures = $controller->index();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Criaturas</title>
    </head>
    <body>
        <h1>Criaturas</h1>
        <a href="create.php">Crear Criatura</a>
        <ul>
            <?php foreach ($creatures as $creature): ?>
                <li>
                    <h2><?= $creature['name'] ?></h2>
                    <img src="<?= $creature['image_url'] ?>" alt="<?= $creature['name'] ?>">
                    <p><?= $creature['description'] ?></p>
                    <a href="detail.php?id=<?= $creature['id'] ?>">Detalles</a>
                    <a href="edit.php?id=<?= $creature['id'] ?>">Editar</a>
                    <a href="delete.php?id=<?= $creature['id'] ?>">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>