<?php

class bbdd {

    private static $host = 'localhost'; // Servidor de base de datos
    private static $dbname = 'rolegame'; // Nombre de la base de datos
    private static $username = 'root'; // Usuario de la base de datos
    private static $password = ''; // Contraseña del usuario
    private static $charset = 'utf8mb4'; // Codificación de caracteres
    private static $pdo = null;

    public static function getConnection() {
        if (self::$pdo === null) {
            try {
                $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=" . self::$charset;
                self::$pdo = new PDO($dsn, self::$username, self::$password);

                // Configurar el manejo de errores y otras opciones
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                // Manejar errores de conexión
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }

    public static function closeConnection() {
        self::$pdo = null;
    }
}
