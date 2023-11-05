<?php
session_start();
require_once("./Config/ConnectionDB.php");
require_once("./Model/db.php");

class UserControl{
    private $model;

    public function __construct(){
        $this->model = new ticket();
    }

    public function _Login(){
        require('./login.php');
    }
}
?>