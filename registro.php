<?php

	$nombre=$_POST['nombre'];
	$apellidopaterno=$_POST['apellidopaterno'];
	$apellidomaterno=$_POST['apellidomaterno'];
	$correo= $_POST['correo'];
	$passd= $_POST['passd'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo='$correo'");
	$check_mail=mysqli_num_rows($checkemail);
		if($passd==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO usuario VALUES('','$nombre','$apellidopaterno','$apellidomaterno', '$correo', '$passd', '', '2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>