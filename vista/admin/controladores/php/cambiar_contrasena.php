<?php
	
	include '../../../../config/conexion.php';

	$usu =isset($_POST["codigo"])?trim($_POST["codigo"]):null;
	$contrasena = isset($_POST["rcontrasena"]) ? trim($_POST["rcontrasena"]) : null;
	$codigo = isset($_POST["codi"]) ? trim($_POST["codi"]): null;
	echo $codigo;
	echo $contrasena;
	$sql ="UPDATE T_USUARIOS
		  SET usu_contrasena = MD5('$contrasena')
		  WHERE usu_id = $usu";

	$result = $conn->query($sql);

	header("location: ../../vista/usuario.php?codigo=".$codigo);

?>