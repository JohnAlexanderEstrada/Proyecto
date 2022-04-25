<?php

include 'include/conect.php'
$genero = "SELECT * FROM Genero";
$guardar = $conect->query($genero);

if(isset($_POST[])){
$nombre = $conect->real_scape_string($_POST['Nombre']);
$apellidop = $conect->real_scape_string($_POST['apellidop']);
$apellidom = $conect->real_scape_string($_POST['apellidom']);
$telefono = $conect->real_scape_string($_POST['telefono']);
$email = $conect->real_scape_string($_POST['correo']);
$fecha = $conect->real_scape_string($_POST['fech_nac']);
$idp = "1";
$idp = "2";

$password = $conect->real_scape_string($_POST['password']);
$calle = $conect->real_scape_string($_POST['calle']);
$colonia = $conect->real_scape_string($_POST['colonia']);
$municipio = $conect->real_scape_string($_POST['municipio']);
$estado = $conect->real_scape_string($_POST['estado']);
$C_P = $conect->real_scape_string($_POST['Codigo_postal']);
//termina consultas cliente

//inicia consultas ofertante
if(isset($_POST[])){
$nombre = $conect->real_scape_string($_POST['Nombre']);
$apellidop = $conect->real_scape_string($_POST['apellidop']);
$apellidom = $conect->real_scape_string($_POST['apellidom']);
$telefono = $conect->real_scape_string($_POST['telefono']);
$email = $conect->real_scape_string($_POST['correo']);
$fecha = $conect->real_scape_string($_POST['fech_nac']);
$idp = "1";
$idp = "2";
$fecha = $conect->real_scape_string($_POST['oficio']);

$password = $conect->real_scape_string($_POST['password']);
$calle = $conect->real_scape_string($_POST['calle']);
$colonia = $conect->real_scape_string($_POST['colonia']);
$municipio = $conect->real_scape_string($_POST['municipio']);
$estado = $conect->real_scape_string($_POST['estado']);
$C_P = $conect->real_scape_string($_POST['Codigo_postal']);


}


?><?php
<?php
include 'include/conect.php'
$genero = "SELECT * FROM Genero";
$guardar = $conect->query($genero);

if(isset($_POST[])){
$nombre = $conect->real_scape_string($_POST['Nombre']);
$apellidop = $conect->real_scape_string($_POST['apellidop']);
$apellidom = $conect->real_scape_string($_POST['apellidom']);
$telefono = $conect->real_scape_string($_POST['telefono']);
$email = $conect->real_scape_string($_POST['correo']);
$fecha = $conect->real_scape_string($_POST['fech_nac']);
$idp = "1";
$idp = "1";
$idp = "2";
$password = $conect->real_scape_string($_POST['password']);

}
?>
?>