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
    <form class="form-signin" action="?op=iniciar" method="POST">
        <div class="mb-3">
            <label for="user" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de usuario">
        </div>
        <div class="mb-3">
            <label for="contrasena" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
        <a href="./view/crearUsuario.php?op=crear" class="btn btn-lg btn-primary btn-block">Registrarse</a>
    </form>
</body>
