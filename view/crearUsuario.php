<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class ="card-body">            
        <form class="form-signin" action="?op=_InsertarUsuario" method="POST">
             <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <a href="?op=_Login" class="btn btn-primary">Volver al Login</a>
</form>
        </form>
    </div>
</body>
</html>

