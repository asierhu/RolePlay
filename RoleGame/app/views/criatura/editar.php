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
        <div class="container">
            <form class="form-horizontal" method="post" action="../../controllers/criatura/CriaturaController.php">
                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="idCreature" value="<?php echo $id;?>">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar (url)</label>
                    <div class="col-sm-10">
                        <input type="avatar" class="form-control" id="avatar" name="avatar" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label">Poder de ataque</label>
                    <div class="col-sm-10">
                        <input type="attackPower" class="form-control" id="attackPower" name="attackPower" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label">Nivel de vida</label>
                    <div class="col-sm-10">
                        <input type="lifeLevel" class="form-control" id="lifeLevel" name="lifeLevel" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label">Arma</label>
                    <div class="col-sm-10">
                        <input type="weapon" class="form-control" id="weapon" name="weapon" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Alta Criatura</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container -->
        <!-- Java Script Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    </body>
</html>


