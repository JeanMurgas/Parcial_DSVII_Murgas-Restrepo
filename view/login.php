<?php
 
require_once '../Controller/LogController.php';

$LogController = new LogController();
$error = null;

if( isset($_GET['login'])){

    if(isset($_POST['nombre']) && isset($_POST['contrasena'])){
        $user = $_POST['nombre'];
        $password = $_POST['contrasena'];
            
        if(!empty($user) && !empty($contrasena)){
            $LogController->login($nombre, $contrasena);

        }else{
            $error = 'Por favor ingrese todos los campos';
        }

    }else{
            $error = 'Por favor ingrese todos los campos';
    }
}
               
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Inicio de sesión</title>
</head>
<body style="height: 100vh; display: flex; align-items: center; justify-content: center;">
<div class="container">
    <div class ="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class ="card-body">
    <h2 class="form-signin-heading">Inicio de sesión</h2>
  <form class="form-signin" action="./login.php?login=" method="POST">
    <?php
    if(!is_null($error)){
        echo "<div class='alert alert-danger' role='alert'>$error</div>";
    }
  ?>
   <div class="mb-3">
    <label for="user" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de usuario">
    </div>
    <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
</div>
    <div id="alert" class"alert alert-danger" role="alert" style="display:none;">
              !Error! Usuario o contraseña incorrectos
    </div>
     <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
     <a href="crearUsuario.php" class="btn btn-lg btn-primary btn-block">Registrarse</a>
    </form>
</body>
