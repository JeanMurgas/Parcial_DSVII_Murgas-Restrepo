<?php
session_start();
require_once("./Config/ConnectionDB.php");
require_once("./Model/db.php");

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
                    header("Location: ?op=menu");
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

}
?>