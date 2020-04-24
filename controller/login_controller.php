<?php  
session_start();


if (isset($_POST["user"]) && isset($_POST["clave"])) {
	$_SESSION["user"] = $_POST["user"]; 
	$_SESSION["clave"] = $_POST["clave"];
	$usuario = $_SESSION["user"];
	$clave = $_SESSION["clave"];
}
//$registro = $_POST["regisro"];

var_dump($_POST);

// if (isset($_POST['registro'])){
// 	echo "string";
// 	header('Location: ../controller/crear_usuario_controller.php');
// }

$button = "<input type=\"submit\" name=\"crear_usuario\">";

//var_dump($clave);
//var_dump($usuario);

require '../database.php';

$sql = "
SELECT nombre_usuario,clave,nombre_rol FROM sistema.usuario as u
INNER join sistema.roles as r
on u.id_usuario = r.id_usuario
inner join sistema.tipo_rol as tr
on r.id_tipo_rol = tr.id_tipo_rol
inner join sistema.roles_permisos as rp
on tr.id_tipo_rol = rp.id_tipo_rol
inner join tipo_permiso as tp
on rp.id_tipo_permiso = tp.id_tipo_permiso
where nombre_usuario =? AND clave =?;
";
$sql1 = "select*from usuario where ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario,$clave);
$stmt->execute();
$result  = $stmt->get_result();
$a = mysqli_fetch_array($result, MYSQLI_ASSOC);

$_SESSION["rol"] = $a["nombre_rol"];

//var_dump($_SESSION["rol"]);

if (
	($usuario == $a["nombre_usuario"]) && ($clave == $a["clave"]) 
) {
	$_SESSION["rol"] = $a["nombre_rol"];
	if (($_SESSION["rol"]="CEO") || (($_SESSION["rol"]="Admnistrador"))) {
		echo "error";
		header('Location: ../controller/main_controller.php');
	}else {
		echo "error";
		header('Location: modulos/modulos_controller.php');
	} 
}else{
	echo "<h1>error, este usuario no existe. <a href=\"../\">regresar</a>  </h1>";

	//header('Location:/parcial');
}

?>