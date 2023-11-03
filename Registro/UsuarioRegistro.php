<?php

require_once '../Config/ConnectionDB.php';
require_once '../Model/ModelUser.php';

class usuarioRegistro{

    public function getUser( $user, $password){
      

        $sql = "SELECT * FROM usuario WHERE user = :user AND pass = :pass";
        $user = null;
    }


}