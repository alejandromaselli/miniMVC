<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>crear usuario</title>
	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>jQuery UI Spinner - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
 
</head>
<body>
	<form action="crear_usuario_controller" method="POST" id="forma">
		<p>Nombre</p><input type="text" placeholder="Nombre" name="nombre" value="andres" required>
		</br>
		<p>Apellido</p><input type="text" placeholder="Apellido" name="apellido" value="mendes" required>
		</br>
		<p>Edad</p><input type="text" placeholder="Edad" name="edad" value="30" required>
		</br>
		<p>Nombre de usuario</p><input type="text" placeholder="Nombre de usuario" value="andmen" name="nombre_usuario" required>
		</br>
		<p>Contraseña</p><input type="text" placeholder="Contraseña" name="clave" value="165" required>
		</br>
		
		<?php 

		include '../controller/crear_usuario_controller.php'; 
		echo $select;

		?>
		<input type="submit" name="agregar" value="Agregar">
	</form>
</body>
</html>