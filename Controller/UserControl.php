<?php
session_start();
require_once('ModelUser.php');

class UserControl{
    private $model;

    public function __construct(){
        $this->model = new usuario();
        
    }

    public function _Login(){
        require('./view/login.php');
    }

    public function _CrearUsuario(){
        require('./view/crearUsuario.php');
    }

    public function _Menu(){
        require('./view/menu.php');
    }
    
    public function _IniciarLogin(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = new usuario();
            $usuario->nombre = $_POST["nombre"];
            $usuario->contrasena = $_POST["contrasena"];

            try {
                $loginResult = $usuario->InicioSesion();
                if ($loginResult === true) {
                    // Inicio de sesión exitoso, redirige al usuario a la página de inicio
                    header("Location: ?op=login");
                    exit();
                } else {
                    // Error de inicio de sesión, muestra un mensaje de error en la vista de inicio de sesión
                    $error_message = "Credenciales incorrectas. Por favor, intenta de nuevo.";
                    include('./view/login.php');
                }
            } catch (Exception $e) {
                // Manejo de excepciones
                $error_message = "Error en el inicio de sesión: " . $e->getMessage();
                include('./view/login.php');
            }
        } else {
            // Si no es una solicitud POST, muestra la página de inicio de sesión
            include('./view/login.php');
        }
    }

    public function _InsertarUsuario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = new usuario();
            $usuario->nombre = $_POST["nombre"];
            $usuario->apellido = $_POST["apellido"];
            $usuario->email = $_POST["email"];
            $usuario->contrasena = $_POST["contrasena"];
    
            try {
                $insertResult = $usuario->InsertarUser();
                if ($insertResult === true) {
                    // Registro de usuario exitoso, redirige al usuario a la página de inicio de sesión
                    header("Location: ?op=login");
                    exit();
                } else {
                    // Error al registrar el usuario, muestra un mensaje de error en la vista de registro
                    $error_message = "No se pudo registrar el nuevo usuario. Por favor, intenta de nuevo.";
                    include('./view/crearUsuario.php');
                }
            } catch (Exception $e) {
                // Manejo de excepciones
                $error_message = "Error al registrar el usuario: " . $e->getMessage();
                include('./view/crearUsuario.php');
            }
        } else {
            // Si no es una solicitud POST, muestra la página de registro
            include('./view/crearUsuario.php');
        }
    }
    

}
?>