<?php

require_once '../../src/servicios/criaturaServicio.php';

$servicio = new criaturaServicio();
$id = $_GET['id'];

if ($id) {
    $servicio->borrarCriatura($id);
}
header("Location: index.php");
exit();
?>