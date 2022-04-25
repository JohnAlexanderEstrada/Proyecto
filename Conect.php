<?php
$server = "localhost";
$usuario = "root";
$bd = "hsoft";
$password = "";
$conect = mysqli_connect($server, $usuario, $password, $bd);
   if($conect->connect_errno){
     die("Error de conexion de base de datos".$conect->connect_errno);
}
?>
