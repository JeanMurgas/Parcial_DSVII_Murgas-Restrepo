<?php

require_once '../Controller/LogController.php';
require_once '../Registro/UsuarioRegistro.php';

$logController = new LogController();
$usuarioRegistro = new UsuarioRegistro();

if (isset($_GET['registro'])) {
    if (isset($_POST["user"]) && isset($_POST["password"])) {
        $datos = array(
            "user" => $_POST["user"],
            "password"=> $_POST["password"],
        );

        $logController->register($datos);
    }
}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <div class="container">
        <form class="form-signin" action="./crearUsuario.php?registro" method="post">
            <?php
           if(isset($_GET['error']) && $_GET['error'] == 1)
           {
               echo "<div class='alert alert-danger' role='alert'>Las contraseñas no coinciden</div>";
           }
           ?>
            <h1 class="form-signin-heading">Registro de usuario</h1>
            <h2 class="form-signin-heading">Por favor registrese</h2>
            <label for="inputUsername" class="sr-only">Nombre de usuario</label>
            <input type="text" id="user" name="user" class="form-control" placeholder="Nombre de usuario" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
            <label for="inputConfirmPassword" class="sr-only">Confirmar Contraseña</label>
            <input type="password" id="inputConfirmPassword" name="confirm_password" class="form-control" placeholder="Confirmar Contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>