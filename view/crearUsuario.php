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
        <form class="form-signin" action="./login.php?op=registro" method="post">
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
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <a href="./login.php?op=backlogin" class="btn btn-lg btn-primary btn-block">Volver al Login</a>
</form>
        </form>
    </div>
</body>
</html>

