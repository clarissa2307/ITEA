<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$user=$_POST['user'];
	$passd=$_POST['passd'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo='$user'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pasd==$f2['passu']){
			$_SESSION['id_usuario']=$f2['id_usuario'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['rol']=$f2['rol'];

			
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo='$user'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pasd==$f['passa']){
			$_SESSION['id_usuario']=$f['id_usuario'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['rol']=$f['rol'];

			header("Location: formularioedu.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='formulariousuario.php'</script>";	

	}

?>