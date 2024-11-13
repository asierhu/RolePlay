<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/CriaturaDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Criatura.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');

$_criaturaController = new CriaturaController();

// Enrutamiento de las acciones
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["type"] == "create"){
        $_criaturaController->createAction();
    }
    else if ($_POST["type"] == "edit"){
        $_criaturaController->editAction();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    //Llamo que hace la edición contra BD
    $_criaturaController->deleteAction();
}

class CriaturaController{
    
    /**
     * Parameterless constractor.
     */
    public function __construct() {
    }
    
    function readAction() {
        $criaturaDAO = new CriaturaDAO();
        return $criaturaDAO->selectAll();
    }
    
    function createAction() {
        // Obtención de los valores del formulario y validación
        $name = ValidationsRules::test_input($_POST["name"]);
        $description = ValidationsRules::test_input($_POST["description"]);
        $avatar = ValidationsRules::test_input($_POST["avatar"]);
        $attackPower = ValidationsRules::test_input($_POST["attackPower"]);
        $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
        $weapon = ValidationsRules::test_input($_POST["weapon"]);
        // Creación de objeto auxiliar   
        $criatura = new Criatura();
        $criatura->setName($name);
        $criatura->setDescription($description);
        $criatura->setAvatar($avatar);
        $criatura->setAttackPower($attackPower);
        $criatura->setLifeLevel($lifeLevel);
        $criatura->setWeapon($weapon);
        
        $criaturaDAO = new CriaturaDAO();
        $criaturaDAO->insert($criatura);

        header('Location: ../../../index.php');
    }

    // Función encargada de crear nuevas ofertas
    function editAction() {
        // Obtención de los valores del formulario y validación
        $idCreature = ValidationsRules::test_input($_POST["idCreature"]);
        $name = ValidationsRules::test_input($_POST["name"]);
        $description = ValidationsRules::test_input($_POST["description"]);
        $avatar = ValidationsRules::test_input($_POST["avatar"]);
        $attackPower = ValidationsRules::test_input($_POST["attackPower"]);
        $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
        $weapon = ValidationsRules::test_input($_POST["weapon"]);
        // Creación de objeto auxiliar   
        $criatura = new Criatura();
        $criatura->setId($idCreature);
        $criatura->setName($name);
        $criatura->setDescription($description);
        $criatura->setAvatar($avatar);
        $criatura->setAttackPower($attackPower);
        $criatura->setLifeLevel($lifeLevel);
        $criatura->setWeapon($weapon);
        
        $criaturaDAO = new CriaturaDAO();
        $criaturaDAO->update($criatura);

        header('Location: ../../../index.php');
    }

    function deleteAction() {
        $id = $_GET["id"];

        $criaturaDAO = new CriaturaDAO();
        $criaturaDAO->delete($id);

        header('Location: ../../../index.php');
    }
    
    
}



?>