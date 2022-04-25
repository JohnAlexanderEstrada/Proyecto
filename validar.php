<?php
error_reporting(0);
session_start();
include 'Conect.php';

$email = $_POST['correo'];
$password = md5($_POST['contra']);

$con = "SELECT * FROM ofertante WHERE EmailO = '$email' and ContraseñaO = '$password'";
 if($resultado = mysqli->query($con))
{
    while ($row = $resultado->fetch_array()){
$mail = $row['EmailO'];
$pass = $row['ContraseñaO'];
       }
       $resultado->close();
}
$msqli->close();

if(isset($email) && ($password)){
    if($email == $mail && $password == $pass){
    $_SESSION['login']= TRUE;
    $_SESSION['mail'] = $email;
    header ("location:home.html");
   }
   else{
header("location:App/index.html");   
}
  }
  else{
header("location:index.html");
}
?>