<?php
require_once '';

class LogController{}

/**
 * Metodo para controlar el inicio de sesion 
 */

 public function login($user, $password){
    $usuarioRegistro = new UsuarioRegistro();
    $usuario = $usuarioRegistro->find($user, $password);

    if($usuario){
        session_start();
        $_SESSION['user'] = serialize ($usuario);
        header('Location: ../view/index.php');
        exit;
    }

    header('refresh:0; url=../view/login.php?error=1');
    exit;
    }

public function register($data){
    $usuarioRegistro = new UsuarioRegistro();

    if ( $usuarioRegistro->create($data) ){
        header('Location: ../view/login.php');
        exit;
    }else{
        header('refresh:0; url=../view/register.php?error=1');
        exit;
}

}