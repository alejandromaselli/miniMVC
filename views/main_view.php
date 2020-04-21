<?php

require '../database.php';
require_once '../controller/login_controller.php';
$message = '';

if (!empty($_POST['user']) && !empty($_POST['clave'])) {
  $sql = "SELECT usuario,clave from users where usuario='qwe' AND clave='qwe";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
}

?>