<?php
require_once '../Registro/UsuarioRegistro.php';

class LogController{

/**
 * Metodo para controlar el inicio de sesion 
 */

 public function login($nombre, $contrasena){
    $usuarioRegistro = new UsuarioRegistro();
    $usuario = $usuarioRegistro->find($nombre, $contrasena);

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

   if (!isset($data['nombre']) || !isset($data['contrasena'])) {
       header('refresh:0; url=../view/crearUsuario.php?error=1');
       exit;
   }

   if ( $usuarioRegistro->create($data['nombre'], $data['contrasena'])) {
       header('refresh:0; url=../view/login.php');
       exit;
   } else {
       header('refresh:0; url=../view/crearUsuario.php?error=1');
       exit;
   }

}
}

?>