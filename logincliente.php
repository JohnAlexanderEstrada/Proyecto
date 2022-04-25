<?php
error_reporting(0);
session_start();
include 'conect.php';

$email = $_POST['correo'];
$password = md5($_POST['contra']);

$con = "SELECT * FROM usuarios WHERE Email = '$email' and Contraseña = '$contra'";
 if($resultado = $mysqli->query($con)){
    while ($row = $resultado->fetch_array()){
$mail = $row['Email'];
$pass = $row['Contraseña'];
       }
       $resultado->close();
}
$msqly->close();

if(isset($email) && ($password)){
    if($email == $mail && $password == $pass){
    $_SESSION['login']= TRUE;
    $_SESSION['mail'] = $email;
    header ("location:PUsuario.html");
   }
   else{
header("location:index.html");   
}
  }
  else{
header("location:index.php");
}
?>