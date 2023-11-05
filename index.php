<?php

require_once("./Model/Db.php");
require_once("./Model/ModelUser.php");
require_once("./Controller/UserControl.php");

$contrl = new UserControl;

$contrl->_Login();

if(isset($_GET['op']) && $_GET['op'] !== null)
{
    $valorURL = $_GET['op'];

    if($valorURL == "crear"){
        $contrl->_CrearUsuario();
    }

    if($valorURL == "menu"){
        $contrl->_Menu();
    }

    #if($valorURL=="Registrar"){$contrl->InsertUser();}

    if($valorURL == "backlogin"){
        $contrl->_Login();
    }

    #if($valorURL == "enviar") {$contrl->_Login();}
}