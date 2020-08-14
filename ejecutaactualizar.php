<?php



extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update educando set nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', curp='$curp', estudio='$estudio', calle='$calle', ext='$ext', inte='$inte', municipio='$municipio', localidad='$localidad', colonia='$colonia', telefono='$telefono'  WHERE id_educando = '$id_educando'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>