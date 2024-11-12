<?php

require_once '../../src/utils/session.php';

endSession();
header("Location: login.php");
exit();
?>
<?php
require_once '../../src/servicios/authServicio.php';

$authService = new authServicio();
$authService->logout();
header("Location: login.php");
exit();
?>