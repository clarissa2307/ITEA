<?php session_start(); 
if (isset($_SESSION['email'])) {
    header('Location: recibe.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellip = $_POST['apellip'];
    $apellim = $_POST['apellim']; 
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

    echo "$nombre . $apellip . $apellim . $email . $pass";
    $errores = '';

    
}
require 'views/registrate.view.php';
?>
