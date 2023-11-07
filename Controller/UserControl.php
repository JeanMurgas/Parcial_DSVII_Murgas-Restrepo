<?php
session_start();
require_once('C:\xampp\htdocs\Parcial_DSVII_Murgas-Restrepo\Model\ModelUser.php');

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
                if ($loginResult == true) {
                    // Inicio de sesión exitoso, redirige al usuario a la página de inicio
                    header("Location: ?op=_Menu");
                    exit();
                } else {
                    // Error de inicio de sesión, muestra un mensaje de error en la vista de inicio de sesión
                    header('Location: ?op=_Login&error=Credenciales_incorrectas._Por_favor_intenta_de_nuevo');
                }
            } catch (Exception $e) {
                // Manejo de excepciones
                header('Location: ?op=_Login&error=Error_al_iniciar_el_sesion: ' . $e->getMessage());
                
            }
        } else {
            // Si no es una solicitud POST, muestra la página de inicio de sesión
            header('Location: ?op=_Login');
        }
    }

    public function _InsertarUsuario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = new usuario();
            $usuario->nombre = $_POST["nombre"];
            $usuario->apellido = $_POST["apellido"];
            $usuario->contrasena = $_POST["contrasena"];
            $usuario->email = $_POST["email"];
    
            try {
                $insertResult = $usuario->InsertarUser();
                if ($insertResult === true) {
                    // Registro de usuario exitoso, redirige al usuario a la página de inicio de sesión
                    header("Location: ?op=_Login");
                    exit();
                }
            } catch (Exception $e) {
                // Manejo de excepciones
                header('Location: ?op=_CrearUsuario&error=Error al registrar el usuario: ' . $e->getMessage());
            }
        } else {
            // Si no es una solicitud POST, muestra la página de registro
            include('./view/crearUsuario.php');
        }
    }
    

}
?>