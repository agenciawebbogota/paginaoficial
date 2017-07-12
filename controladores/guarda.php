<?php
	if (isset($_POST["nombre"]) AND isset($_POST["correo"])) {
		require_once("../conexion/conn.php");
		///////Captura de información recibida por ajax////////
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];
		$mensaje = $_POST["mensaje"];
		///////Insertar datos en la base de datos con nombre agenciaw_landing/////
		$db = new conexion();
		// $q = "INSERT INTO `registrospaginaprincipalawb` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `mensaje`,`cargado` ) VALUES (NULL, '$nombre', '$apellido', '$telefono', '$correo','$mensaje', CURRENT_TIMESTAMP)";
		$q = "INSERT INTO `registrospaginaprincipalawb` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `mensaje`, `cargado`) VALUES (NULL, '$nombre', '$apellido', '$telefono', '$correo', '$mensaje', CURRENT_TIMESTAMP)";
		$db->abc($q);
		///////// Enviar email ///////
		require_once('correo.php');
		print(enviaEmail($nombre, $apellido, $telefono, $correo,$mensaje));
	}else{
		header("location: ../");
	}
 ?>