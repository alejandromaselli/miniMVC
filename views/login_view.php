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

  <?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Ingrese su usuario</h1>
  <span>o <a href="signup.php">registre usuario</a></span>

  <form action="./views/main_view.php" method="POST">
    <input name="user" type="text" placeholder="Ingrese el usuario" value="qwe">
    <input name="clave" type="password" placeholder="Ingrese su contraseña" value="qwe">
    <input type="submit" value="Entrar">
  </form>
</body>
</html>