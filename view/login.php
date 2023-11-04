<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../css/style.css">
<title>Inicio de sesión</title>
</head>
<body>
<div class="container">
    <h2 class="form-signin-heading">Inicio de sesión</h2>
  <form class="form-signin" action="./login.php?login=" method="POST">
    <?php
    if(!is_null($error)){
        echo "<div class='alert alert-danger' role='alert'>$error</div>";
    }
  ?>
    <label for="inputEmail" class="sr-only">Usuario</label>
    <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Usuario" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
    </form>
</div>

</body>
