<?php

$user = [
    "nombre" => "Alejandro",
    "contrasena" => "1234"

];
$usu = $_POST['user'];
$pass = $_POST['contra'];
if ($usu == $user['nombre'] && $pass == $user['contrasena']){
    header("Location:ok.php");
    exit();
}else {
    header("Location:ko.php");
    exit();
}



?>