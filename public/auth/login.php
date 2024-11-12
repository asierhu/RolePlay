<?php
require_once '../../src/servicios/authServicio.php';

$authService = new authServicio();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usu'];
    $password = $_POST['pass'];

    if ($authService->authenticate($username, $password)) {
        header("Location: ../criatura/index.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <form method="POST" action="">
            <label for="usu">Usuario:</label>
            <input type="text" id="usu" name="usu" required>
            <br>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <br>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <?php if (isset($error)): ?>
            <p><?= $error ?></p>
        <?php endif; ?>
    </body>
</html>