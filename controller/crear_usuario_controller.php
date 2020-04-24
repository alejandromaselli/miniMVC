<?php 
require_once '../database.php';

if (isset($_POST['agregar'])) {
	//var_dump($_POST);
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$edad = $_POST["edad"];
	$nombre_usuario = $_POST["nombre_usuario"];
	$clave = $_POST["clave"];
	$rol = $_POST["rol"];

	$result = mysqli_query($conn,'select * from sistema.usuario;');
	$id_usuario = mysqli_num_rows($result)+1;
	echo "
	<p>Ha creado el usuario correctamente, Inicie sesion <a href=\"../\">aca</a></p>";


	$sql = 'insert into sistema.usuario(nombre_usuario,clave) values(?,?);';
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ss", $nombre_usuario,$clave);
	$stmt->execute();

	//Inserta los valores en la tabla persona
	$sql = 'insert into sistema.persona(nombre,apellido,edad) values(?,?,?);';
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssi", $nombre,$apellido,$edad);
	$stmt->execute();
	//Inserta los datos en la tabla usuario
	
	

	$sql = 'select * from sistema.tipo_rol';
	$res = mysqli_query($conn, $sql);
	while($cRow = mysqli_fetch_array($res)){
		if($cRow[1] == $rol){
			//echo $cRow[0];
			$sql = 'insert into sistema.roles(id_usuario,id_tipo_rol) values(?,?);';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ii", $id_usuario,$cRow[0]);
			$stmt->execute();

		}


	}

	$conn->close();




}else{
	require_once '../views/crear_usuarios_view.php';
	require_once '../database.php';

	$sql = 'select nombre,apellido,nombre_usuario,clave from sistema.persona inner join sistema.usuarioon persona.id_usuario = usuario.id_usuario;';

	$sql = 'select * from ';

	$result = mysqli_query($conn,'select * from tipo_permiso');

	$row = mysqli_num_rows($result);


	$res = mysqli_query($conn, "select * from tipo_rol");


	$select = "<div class=\"caja\"><select name=\"rol\"  form=\"forma\">";
	while($cRow = mysqli_fetch_array($res)){
		$select = $select."<option value=\"".strval($cRow[1])."\">".strval($cRow[1])."</option>";
	}
	
	$select = $select. "</select></div>";

}
?>
