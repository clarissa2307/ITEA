<?php session_start(); 
if (isset($_SESSION['email'])) {
    header('Location: formulario.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = filter_var(ucfirst($_POST['nombre']), FILTER_SANITIZE_STRING);
    $apellip = filter_var(ucfirst($_POST['apellip']), FILTER_SANITIZE_STRING) ;
    $apellim = filter_var(ucfirst($_POST['apellim']), FILTER_SANITIZE_STRING); 
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

    echo "$nombre . $apellip . $apellim . $email . $pass";
    $errores = '';
     try {
         $conexion = new PDO
     } catch (\Throwable $th) {
         //throw $th;
     }
    
}
require 'views/registrate.view.php';
?>
