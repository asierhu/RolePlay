<?php

require_once '../persistence/DAO/criaturaDAO.php';

class criaturaServicio {

    private $criaturaDAO;

    public function __construct() {
        $this->criaturaDAO = new CreatureDAO();
    }

    public function listaCriaturas() {
        return $this->criaturaDAO->getAll();
    }

    public function detallesCriatura($id) {
        return $this->criaturaDAO->getById($id);
    }

    public function anyadirCreature($creature) {
        $this->criaturaDAO->create($creature);
    }

    public function editarCriatura($id, $creature) {
        $this->criaturaDAO->update($id, $creature);
    }

    public function borrarCriatura($id) {
        $this->criaturaDAO->delete($id);
    }
}
