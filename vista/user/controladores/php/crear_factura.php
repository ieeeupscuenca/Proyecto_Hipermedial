<?php

	
	include '../../../../config/conexion.php';
	
	date_default_timezone_set("America/Guayaquil");	

	$evento=isset($_POST["evento"])?trim($_POST["evento"]):null;
	$codigo =isset($_POST["codigo"])?trim($_POST["codigo"]):null;
	$eventoId=isset($_POST["eventoId"])?trim($_POST["eventoId"]):null;
	$precio=isset($_POST["total"])?trim($_POST["total"]):null;
	$cantidad=isset($_POST["cnt"])?trim($_POST["cnt"]):null;
	$fechaC = date("y-m-d h:i:s",time());

	$sql="INSERT INTO T_FACTURA_CABECERA VALUES(0,'$fechaC',$codigo)";
	$result =$conn->query($sql);

	echo $sql;

	if($eventoId == 1){
		$factura="SELECT *
				  FROM T_FACTURA_CABECERA 
				  WHERE fc_usu_id=$codigo AND
				  fc_fecha='$fechaC'";
		
		$resultadoF=$conn->query($factura);
		$row=$resultadoF->fetch_assoc();
		var $id = $row['fc_id'];
		var $desc = "Boleto General"
		$sqlFD="INSERT INTO T_FACTURA_DETALLE VALUES(0,'$desc',$cantidad,$precio,$id,$evento)";
		echo $sqlFD;
	}
	
	
?>