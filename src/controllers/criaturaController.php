<?php

require_once '../servicios/servicioCriatura.php';
require_once '../models/criatura.php';

class criaturaController {

    private $service;

    public function __construct() {
        $this->service = new servicioCriatura();
    }

    public function index() {
        return $this->service->listaCriaturas();
    }

    public function show($id) {
        return $this->service->detallesCriatura($id);
    }
    public function create($data) {
        $creature = new criatura($data['name'], $data['description'], $data['image_url']);
        $this->service->anyadirCreature($creature);
    }

    public function update($id, $data) {
        $creature = new criatura($data['name'], $data['description'], $data['image_url'], $id);
        $this->service->editarCriatura($id, $creature);
    }

    public function delete($id) {
        $this->service->borrarCriatura($id);
    }
}
