<?php  

require_once '../views/ver_usuarios_view.php';

require_once '../database.php';

// 	var_dump($_POST);

if (isset($_POST['editar'])) {
	
	switch ($_POST['opcion']) {
		case "acceso":
		$sql = "SELECT * FROM acceso;";
		break;

		case "modulo":
		$sql = "SELECT * FROM modulo;";
		break;

		case "pagina":
		$sql = "SELECT * FROM permisos;";
		break;

		case "persona":
		$sql = "SELECT * FROM Roles;";
		break;
		case "roles_permisos":
		$sql = "SELECT * FROM Roles;";
		break;
		case "tipo_permisos":
		$sql = "SELECT * FROM Roles;";
		break;
		case "tipo_rol":
		$sql = "SELECT * FROM Roles;";
		break;
		case "usuario":
		$sql = "SELECT * FROM Roles;";
		break;
		case "Roles":
		$sql = "SELECT * FROM Roles;";
		break;

		default:
		break;
	}
	echo "editar";
}else if (isset($_POST['ver'])) {
	echo "ver";
}

$sql = "SELECT * FROM usuario;";

$result = mysqli_query($conn,$sql);

//$row = mysqli_num_rows($result);

$contador = 0;

$table = " <table border='1' >";

while($row = mysqli_fetch_assoc($result)){  
	$table = $table."<tr>";
	foreach($row as $key => $val){ 
		echo "<tr>$val</tr>";
		break;
	}
	$table = $table."</tr>";
	$table = $table."<tr>";
	foreach($row as $key => $val){   
		$table = $table."<td>$val</td>";        
	}
	$table = $table."</tr>";
}

$table = $table."</table>";





?>