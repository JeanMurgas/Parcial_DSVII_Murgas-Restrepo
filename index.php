<?php
require_once("./Controller/UserControl.php");
require_once("./Controller/TicketControl.php");

$controlador = new UserControl();
$controladorTicekt = new TicketControl();

if (isset($_GET['op'])) {
    $accion = $_GET['op'];
} else {
    $accion = '_Login';
}

switch ($accion) {
    case '_Login':
        $controlador->_Login();
        break;
    case '_IniciarLogin':
        $controlador->_IniciarLogin();
        break;
    case '_CrearUsuario':
        $controlador->_CrearUsuario();
        break;
    case '_InsertarUsuario':
        $controlador->_InsertarUsuario();
        break;
    case '_Menu':
        $controlador->_Menu();
        $controladorTicekt->_Menu();
        break;
    default:
        echo 'Acción no válida';
        break;
}
?>
