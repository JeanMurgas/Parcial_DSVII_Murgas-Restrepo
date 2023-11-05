<?php
require_once './Config/ConnectionDB.php';
class ticket{
    public $titulo;
    public $descripcion;
    public $fecha_creacion;
    public $estado; #Esta variable se usa para manejar estados(abierto, cerrado, en proceso)
    private $pdo; 
    private $result;
}
?>