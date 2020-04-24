<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registro</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<h1>Bienvenido 
		<?php 
		session_start();
		echo $_SESSION['user']; 
		?> 
	¿A dónde deseas ir?</h1>
	<form action="./mantenimiento_controller.php" method="POST" id="forma">
		<h2>Mantenimiento </h2>
		<?php 
		/*include '../controller/main_controller.php'; 

		echo $select; 
		*/?>
		<input type="submit" value="Mantenimiento tablas"  name="ver">
	</form>
	<form action="./crear_usuario_controller.php" method="POST">
		
		<h2>Crear usuario</h2>
		<?php 
		/*
		include '../controller/main_controller.php'; 
		
		echo $select; 
		*/
		?>
		
		<input type="submit" value="Crear usuario" name="editar">
	</form>
</body>
</html>
