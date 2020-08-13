<?php


<<<<<<< HEAD
		$mysqli = new MySQLi("localhost", "root","", "itea");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_error()
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
=======
$mysqli = new MySQLi("localhost", "root","", "itea");
if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_error()
		. ") " . $mysqli -> mysqli_connect_error());
}
else
>>>>>>> 0688ce8a78d1cc4e4a88e01edaea89455719074a
			
?>