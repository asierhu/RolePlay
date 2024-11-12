<?php

class conexion {

    private static $instance = null;
    private $connection;

    private function __construct() {
        $host = 'localhost';
        $db = 'rolegame';
        $user = 'root';
        $password = '';
        $this->connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Connection();
        }
        return self::$instance->connection;
    }
}
