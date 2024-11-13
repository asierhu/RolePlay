<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');


class CriaturaDAO {

    //Se define una constante con el nombre de la tabla
    const TABLA_CRIATURA = 'creature';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . CriaturaDAO::TABLA_CRIATURA;
        $result = mysqli_query($this->conn, $query);
        $criaturas= array();
        while ($criaturaBD = mysqli_fetch_array($result)) {
            $criatura = new Criatura();
            $criatura->setId($criaturaBD["idCreature"]);
            $criatura->setName($criaturaBD["name"]);
            $criatura->setDescription($criaturaBD["description"]);
            $criatura->setAvatar($criaturaBD["avatar"]);
            $criatura->setAttackPower($criaturaBD["attackPower"]);
            $criatura->setLifeLevel($criaturaBD["lifeLevel"]);
            $criatura->setWeapon($criaturaBD["weapon"]);
            
            array_push($criaturas, $criatura);
        }
        return $criaturas;
    }

    public function insert($criatura) {
        $query = "INSERT INTO " . CriaturaDAO::TABLA_CRIATURA .
                " (name,description,avatar,attackPower,lifeLevel,weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        
        $name = $criatura->getName();
        $description = $criatura->getDescription();
        $avatar = $criatura->getAvatar();
        $attackPower = $criatura->getAttackPower();
        $lifeLevel = $criatura->getLifeLevel();
        $weapon = $criatura->getWeapon();      
        
        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar,$attackPower,$lifeLevel,$weapon);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT name, description, avatar,attackPower,lifeLevel,weapon FROM " . CriaturaDAO::TABLA_CRIATURA . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar,$attackPower,$lifeLevel,$weapon);

        $criatura = new Criatura();
        while (mysqli_stmt_fetch($stmt)) {
            $criatura->setName($name);
            $criatura->setDescription($description);
            $criatura->setAvatar($avatar);
            $criatura->setAttackPower($attackPower);
            $criatura->setLifeLevel($lifeLevel);
            $criatura->setWeapon($weapon);
       }

        return $criatura;
    }

    public function update($criatura) {
        $query = "UPDATE " . CriaturaDAO::TABLA_CRIATURA .
                " SET name=?, description=?, avatar=?,attackPower=?,lifeLevel=?,weapon=?"
                . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $criatura->getName();
        $description = $criatura->getDescription();
        $avatar = $criatura->getAvatar();
        $attackPower = $criatura->getAttackPower();
        $lifeLevel = $criatura->getLifeLevel();
        $weapon = $criatura->getWeapon();    
        $id = $criatura->getId();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $name, $description, $avatar, $attackPower,$lifeLevel,$weapon,$id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . CriaturaDAO::TABLA_CRIATURA . " WHERE idCreature =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

        
}

?>
