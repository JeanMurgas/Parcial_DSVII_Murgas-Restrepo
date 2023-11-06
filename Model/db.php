<?php
class Db {
    public static function StartUp() {
        try {
            $pdo = new PDO('mysql:host=localhost;port=33065;dbname=tubasededatos;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            return null;
        }
    }
}
?>