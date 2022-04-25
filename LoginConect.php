<?php
session_start();
error_reporting(0);
     include 'include/conect.php';
     if(isset($_POST['ingresar'])){
     $remail = $conect->real_escape_string($_POST['email']);
      $rpass = $conect->real_escape_string($_POST['password']);

      $cosult = "SELECT * FROM usuarios WHERE usuario = '$remail' and Password = '$rpass'";
      if($resul = $conect->query($consult)){
      while($row = $resul->fetch_array()){
$userok = $row['Correo'];
$passwordok = $row['Password'];
}
$resul->close;
}
$concect->close();
if(isset($ruser) && isset($rpass)){
    if($ruser == $ruserok && $rpass = $passwordok){
$_SESSION['login'] = TRUE;
$_SESSION['Usuario'] = $email;
heade("location:login.html");
}
else{
     $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>No se encontraron tus datos</strong> Por favor, verifica si tienes una cuenta
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     </div>";
     }
}
else{  
     $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Bienvenido</strong> Por favor, verifica si tienes una cuenta
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     </div>";
      }
     
}
?>


