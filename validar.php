<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['usuario'];
	$pass=$_POST['passt'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['passu']){
			//$_SESSION['id_usuario']=$f2['id_usuario'];
			$_SESSION['correo']=$f2['correo'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuario WHERE correo='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pass']){
			//$_SESSION['id_usuario']=$f['id_usuario'];
			$_SESSION['correo']=$f['correo'];
			$_SESSION['rol']=$f['rol'];

			header("Location: formularioedu.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>