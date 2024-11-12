<?php

require_once '../servicios/authServicio.php';

class authController {

    private $authService;

    public function __construct() {
        $this->authService = new AuthService();
    }

    /**
     * Maneja el inicio de sesión.
     *
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login($username, $password) {
        return $this->authService->authenticate($username, $password);
    }

    /**
     * Cierra la sesión del usuario actual.
     */
    public function logout() {
        $this->authService->logout();
    }

    /**
     * Verifica si el usuario está autenticado.
     *
     * @return bool
     */
    public function isAuthenticated() {
        return $this->authService->isAuthenticated();
    }

    /**
     * Obtiene el nombre del usuario autenticado.
     *
     * @return string|null
     */
    public function getUser() {
        return $this->authService->getAuthenticatedUser();
    }
}
