<?php

require_once '../Config/ConnectionDB.php';
require_once '../Model/ModelUser.php';

class usuarioRegistro{
    private $db;

    public function __construct()
    {
        $this->db = ConnectionDB::getInstance();
    }
    
    public function find($user){
        $db = ConnectionDB::getInstance();
        
        $stmt = $db->prepare("SELECT * FROM usuario WHERE user = :user");
        $stmt->bindParam(':user', $user);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($user, $password)

    {
        $db = ConnectionDB::getInstance();
        $stmt = $db->prepare("INSERT INTO usuario (user, pass) VALUES (:user, :pass)");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $password);
        return $stmt->execute();
    }

}
?>