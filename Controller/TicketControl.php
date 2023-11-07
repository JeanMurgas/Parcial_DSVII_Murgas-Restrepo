<?php
require_once('C:\xampp\htdocs\Parcial_DSVII_Murgas-Restrepo\Model\ModelTicket.php');

class TicketControl{
    private $model;

    public function __construct(){
        $this->model = new ticket();
    }

    public function _CrearTicket(){
        require('./view/crearTicket.php');
    }

    public function _MenuTicket(){
        require('./view/menu.php');
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
                    header("Location: ?op=menu");
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

    public function _UsuarioTecnicoLogin(){
        if (isset($_SESSION["usuario_tipo"]) && $_SESSION["usuario_tipo"] === "tecnico") {
            // El usuario es un técnico, permitir el acceso a la página de "Modificar Ticket"
            require('./view/modificarTicket.php');
        } else {
            // Redirigir a otra página o mostrar un mensaje de error si el usuario no tiene permiso
            header("Location: ?op=menu"); // Por ejemplo, redirigir de nuevo al menú
        }
    }
}
?>