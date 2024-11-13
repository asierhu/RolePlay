<?php

class Criatura {

    private $id;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;

    public function __construct() {
        // Constructor vacío para inicialización
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function setAttackPower($attackPower) {
        $this->attackPower = $attackPower;
    }

    public function setLifeLevel($lifeLevel) {
        $this->lifeLevel = $lifeLevel;
    }

    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }

    // Función para pintar criatura privada en HTML
    public function privateCreature2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<img src="' . $this->getAvatar() . '" class="card-img-top" alt="' . $this->getName() . '">';
        $result .= '<div class="card-body">';
        $result .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $result .= '<p class="card-text description">' . $this->getDescription() . '</p>';
        $result .= '<p class="card-text">Poder de ataque: ' . $this->getAttackPower() . '</p>';
        $result .= '<p class="card-text">Nivel de vida: ' . $this->getLifeLevel() . '</p>';
        $result .= '<p class="card-text">Arma: ' . $this->getWeapon() . '</p>';
        $result .= '</div>';
        $result .= '<div class="btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-secondary" href="app/views/criatura/detalle.php?id=' . $this->getId() . '">Detalles</a>';
        $result .= '<a type="button" class="btn btn-success" href="app/views/criatura/editar.php?id=' . $this->getId() . '">Modificar</a>';
        $result .= '<a type="button" class="btn btn-danger" href="app/controllers/criatura/CriaturaController.php?id=' . $this->getId() . '">Borrar</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';

        return $result;
    }
}
