<?php
require_once("./Model/ModelTicket.php");

class UserControl{
    private $model;

    public function __construct(){
        $this->model = new ticket();
    }

    public function _CrearTicket(){
        require('./view/crearTicket.php');
    }

    public function _InsertarTicket(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ticket = new ticket();
            $ticket->titulo = $_POST["titulo"];
            $ticket->descripcion = $_POST["descripcion"];
            $ticket->fecha_creacion = $_POST["fecha_creacion"];
            $ticket->estado = $_POST["estado"];
    
            try {
                $insertResult = $ticket->_CrearTicket();
                if ($insertResult === true) {
                    // Registro de usuario exitoso, redirige al usuario a la página de inicio de sesión
                    header("Location: ?op=login");
                    exit();
                } else {
                    // Error al registrar el usuario, muestra un mensaje de error en la vista de registro
                    $error_message = "No se pudo crear el ticket. Por favor, intenta de nuevo.";
                    include('./view/crearTicket.php');
                }
            } catch (Exception $e) {
                // Manejo de excepciones
                $error_message = "Error al crear ticket: " . $e->getMessage();
                include('./view/crearTicket.php');
            }
        } else {
            // Si no es una solicitud POST, muestra la página de registro
            include('./view/crearTicket.php');
        }
    }
}
?>