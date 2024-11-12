<?php

require_once '../utils/session.php';

class authServicio {

    private $usuario;

    public function __construct() {
        // Usuario hardcoded (puedes ajustar los valores según necesites)
        $this->usuario = [
            'user' => 'admin',
            'password' => 'password' // Puedes usar un hash como password_hash('password', PASSWORD_DEFAULT)
        ];
    }

    /**
     * Verifica si las credenciales proporcionadas son correctas.
     * 
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function authenticate($username, $password) {
        // Verifica usuario y contraseña
        if (
                $username === $this->usuario['user'] &&
                $password === $this->usuario['password']
        ) {
            $this->startSession($username);
            return true;
        }
        return false;
    }

    private function startSession($username) {
        startSession();
        $_SESSION['user'] = $username;
    }

    public function logout() {
        endSession();
    }

    public function isAuthenticated() {
        startSession();
        return isset($_SESSION['user']);
    }

    public function getAuthenticatedUser() {
        startSession();
        return $_SESSION['user'] ?? null;
    }
}
