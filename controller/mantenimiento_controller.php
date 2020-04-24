<?php  

require_once '../views/mantenimiento_view.php';
require_once '../database.php';



if (isset($_POST['avanzar'])) {

	//var_dump($_POST);

	switch ($_POST['opcion']) {
		case "acceso":
		$sql = "SELECT * FROM acceso;";
		break;

		case "modulo":
		$sql = "SELECT * FROM modulo;";
		break;

		case "pagina":
		$sql = "SELECT * FROM pagina;";
		break;

		case "persona":
		$sql = "SELECT * FROM persona;";
		break;

		case "roles":
		$sql = "
		SELECT nombre_usuario,nombre_rol FROM sistema.tipo_rol as tp
		inner join sistema.roles as r
		on tp.id_tipo_rol=r.id_tipo_rol
		inner join sistema.usuario as u
		on u.id_usuario = r.id_usuario
		";
		break;

		case "roles_permisos":
		$sql = "
		SELECT * FROM roles_permisos;
		";
		break;

		case "tipo_permiso":
		$sql = "SELECT * FROM tipo_permiso;";
		break;

		case "tipo_rol":
		$sql = "SELECT * FROM tipo_rol;";
		break;
		default:
		break;
	}
	//echo $sql;

	$result = mysqli_query($conn,$sql);


	$contador = 0;

	$table = " <table border='1'>";

	while($row = mysqli_fetch_assoc($result)){  
		$table = $table."<tr>";
		foreach($row as $key => $val){ 
		//echo "<th>.$key.key</th>";        
		}
		$table = $table."</tr>";
		$table = $table."<tr>";
		foreach($row as $key => $val){   
			$table = $table."<td>$val</td>";        
		}
		$table = $table."</tr>";
	}

	$table = $table."</table>";

}else if (isset($_POST['ver'])) {
	//echo "ver";
}


//$sql = "SELECT * FROM persona;";


//$row = mysqli_num_rows($result);


$result = mysqli_query($conn,'Show tables from sistema;');

$row = mysqli_num_rows($result);


$res = mysqli_query($conn, "show tables ");


$select = "<select name=\"opcion\"  form=\"forma\">";
while($cRow = mysqli_fetch_array($res)){
	$select = $select."<option value=\"".strval($cRow[0])."\">".strval($cRow[0])."</option>";
}
$select = $select. "</select>";



// $result = mysqli_query($conn,'Select * from sistema.persona');


// $contador = 0;

// $table = " <table border='1'>";

// while($row = mysqli_fetch_assoc($result)){  
// 	$table = $table."<tr>";
// 	foreach($row as $key => $val){ 
// 		//echo"<th>$key.key</th>";        
// 	}
// 	$table = $table."</tr>";
// 	$table = $table."<tr>";
// 	foreach($row as $key => $val){   
// 		$table = $table."<td>$val</td>";        
// 	}
// 	$table = $table."</tr>";
// }

// $table = $table."</table>";

?>