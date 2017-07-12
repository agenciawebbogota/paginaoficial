<?php 
	if(isset($_POST["correo"])){
		require_once("../conexion/conn.php");
		$correo = $_POST["correo"];

		$db = new conexion();
		$q = "INSERT INTO `suscripciones` (`id`, `correo`, `suscrito`) VALUES (NULL, '$correo', CURRENT_TIMESTAMP)";
		$db->abc($q);

		print(1);
	}else{
		header('location: ../');
	}
 ?>