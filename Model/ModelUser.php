<?php

class usuario{
    public $id_usuario;
    public $user;
    private $pass;
    private $pdo; 
    private $result;

    public function getIdUsuario(){
        return $this->id_usuario;
}

public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
}

public function getUser(){
    return $this->user;
}

public function setUser($user){
    $this->user = $user;
}

public function getPass(){
    return $this->pass;
}

public function setPass($pass){
    $this->pass = $pass;
}

public function cargardatos( $data){
    $this->setIdUsuario($data->id_usuario);
    $this->setUser($data->user);
    $this->setPass($data->pass);
}

public function getPDO(){
    return $this->pdo;
}

public function setPDO($pdo){
    $this->pdo = $pdo;
}

public function getResult(){
    return $this->result;
}

public function setResult($result){
    $this->result = $result;
}

}

?>