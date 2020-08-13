<?php
     
	$nombre=$_POST['nombre'];
	$apellidop=$_POST['apellidop'];
	$apellidom=$_POST['apellidom'];
	$curp= $_POST['curp'];
    $edad=$_POST['edad'];
    $genero=$_POST['genero'];
    $fecha=$_POST['fecha'];
    $correo=$_POST['correo'];
    $estudio=$_POST['estudio'];
    $calle=$_POST['calle'];
    $ext=$_POST['ext'];
    $inte=$_POST['inte'];
    $municipio=$_POST['municipio'];
    $localidad=$_POST['localidad'];
    $colonia=$_POST['colonia'];
    $telefono=$_POST['telefono'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO educando VALUES('','$nombre','$apellidop','$apellidom', '$curp', '$edad', '$genero', '$fecha', '$correo', '$estudio', '1')");
				//echo 'Se ha registrado con exito';
				
                
                mysqli_query($mysqli,"INSERT INTO domicilio VALUES('','$calle','$ext','$inte', '$municipio', '$localidad', '$colonia', '$telefono', '26')");
				////echo 'Se ha registrado con exito';
				//echo ' <script language="javascript">alert("Se registrado con éxito");</script> ';
		
	
?>