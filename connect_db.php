<?php



		$mysqli = new MySQLi("localhost", "root","", "itea");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_error()
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else


			
?>