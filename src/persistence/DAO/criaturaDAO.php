<?php

require_once 'Icriatura.php';
require_once '../models/criatura.php';

class criaturaDAO implements Icriatura {

    private $db;

    public function __construct() {
        $this->db = Connection::getInstance();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM creature");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM creature WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($creature) {
        $stmt = $this->db->prepare("INSERT INTO creature (name, description, image_url) VALUES (:name, :description, :image_url)");
        $stmt->execute([
            'name' => $creature->getName(),
            'description' => $creature->getDescription(),
            'image_url' => $creature->getImageUrl()
        ]);
    }

    public function update($id, $creature) {
        $stmt = $this->db->prepare("UPDATE creature SET name = :name, description = :description, image_url = :image_url WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'name' => $creature->getName(),
            'description' => $creature->getDescription(),
            'image_url' => $creature->getImageUrl()
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM creature WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
