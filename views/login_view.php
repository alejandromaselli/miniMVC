<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php require 'partials/header.php' ?>

  <h1>Ingrese su usuario</h1>
  <form action="./controller/login_controller.php" method="POST">
    <input name="user" type="text" placeholder="Ingrese el usuario" value="jamas">
    <input name="clave" type="text" placeholder="Ingrese su contraseña" value="123">
    <input type="submit" value="entrar">
  </form>
  <!-- <select name="opcion" id="">
    <option value="Crear">Crear</option>
    <option value="Leer">Leer</option>
    <option value="Actualizar">Actualizar</option>
    <option value="Borrar">Borrar</option>
  </select> -->
  <form action="./controller/login_controller.php" method="POST">
    <!-- <input type="submit" name="registro" value="Crear usuario"> -->
  </form>

  
</body>
</html>

