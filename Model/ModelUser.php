<?php

class usuario{
    public $id_usuario;
    public $nombre;
    private $contrasena;
    private $pdo; 
    private $result;

    public function getIdUsuario(){
        return $this->id_usuario;
}

public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
}

public function getUser(){
    return $this->nombre;
}

public function setUser($nombre){
    $this->nombre = $nombre;
}

public function getPass(){
    return $this->contrasena;
}

public function setPass($contrasena){
    $this->contrasena = $contrasena;
}

public function cargardatos( $data){
    $this->setIdUsuario($data->id_usuario);
    $this->setUser($data->nombre);
    $this->setPass($data->contrasena);
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