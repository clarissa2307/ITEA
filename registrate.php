<?php session_start(); 
if (isset($_SESSION['usuario'])) {
    header('Location: recibe.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    echo "$usuario . $password . $password2";
}
require 'views/registrate.view.php';
?>
