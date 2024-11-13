<?php
require_once(dirname(__FILE__) . '\..\..\..\persistence\DAO\CriaturaDAO.php');
require_once(dirname(__FILE__) . '\..\..\models\Criatura.php');
//Compruebo que me llega por GET el parÃ¡metro
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new CriaturaDAO();
    $creature = $creatureDAO->selectById($id);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>RoleGame</title>
        <!-- Bootstrap Core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img height="50px" src="./assets/img/d4logo.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a  class="nav-link " href="./app/views/criatura/crear.php">Añadir</a>
                    </li>
                </ul>
            </div>  
        </nav>
       <!-- Page Content -->
        <label for="name" >Name: </label>
        <label for="nameC"><?php echo $creature->getName(); ?></label>
        <br>
        <label for="description">Description: </label>
        <label for="descripcionC"><?php echo $creature->getDescription(); ?></label>
        <br>
        <label for="avatar">Avatar: </label>
        <label for="avatarC"><?php echo $creature->getAvatar(); ?></label>
        <br>
        <label for="attackPower">Attack Power: </label>
        <label for="attackC"><?php echo $creature->getAttackPower(); ?></label>
        <br>
        <label for="lifeLevel">Life Level: </label>
        <label for="lifeC"><?php echo $creature->getLifeLevel(); ?></label>
        <br>
        <label for="weapon">Weapon: </label>
        <label for="weaponC"><?php echo $creature->getWeapon(); ?></label>
        <br>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    </body>
</html>

