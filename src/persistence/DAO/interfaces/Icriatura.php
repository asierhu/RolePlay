<?php

interface Icriatura {

    public function getAll();

    public function getById($id);

    public function create($creature);

    public function update($id, $creature);

    public function delete($id);
}
