<?php  

require_once '../views/main_view.php';
require_once '../database.php';

$result = mysqli_query($conn,'Show tables from sistema;');

$row = mysqli_num_rows($result);


$res = mysqli_query($conn, "show tables ");


$select = "<select name=\"opcion\"  form=\"forma\">";
while($cRow = mysqli_fetch_array($res)){
  $select = $select."<option value=\"".strval($cRow[0])."\">".strval($cRow[0])."</option>";
}
$select = $select. "</select>";

if (isset($_POST["ver"])) {
  echo "la mera tos";
}

/*
$message = '';

if (!empty($_POST['user']) && !empty($_POST['clave'])) {
  $sql = "SELECT usuario,clave from users where usuario='qwe' AND clave='qwe";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['clave'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
  */
  ?>