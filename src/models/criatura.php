<?php

class criatura {

    private $id;
    private $name;
    private $description;
    private $avatar;

    public function __construct($name, $description, $avatar, $id = null) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->avatar = $avatar;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getImageUrl() {
        return $this->avatar;
    }

    public function setImageUrl($avatar) {
        $this->avatar = $avatar;
    }

}
