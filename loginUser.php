<?php
error_reporting(0);
include 'include/Conect.php';
if (isset($_POST['Ingreso'])) {
$correo = $conect->real_escape_string($_POST['user']);
$password = $conect->real_escape_string(md5($_POST['pass']));
$consulta = "SELECT * FROM usuarios WHERE Email = '$correo' and Password = '$password'";
if ($ejecuta = $conect->query($consulta)) {
while ($row = $ejecuta->fetch_array()) {
$emailok = $row['Email'];
$passwordok = $row['Password'];
}
$ejecuta->close();
}
$conect->close();
if (isset($correo) && isset($password)) {
if ($correo == $emailok && $password == $passwordok) {
$_SESSION['login'] = TRUE;
header("location:home.html");
}
else {
echo "Verifica tus credenciales porfavor";
}
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login De Usuario</title>
	 <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col">
			 <img src="img/logoo.png" class="img-fluid"
                     alt="Sample image">
		</div>
		<div class="col shadow">
			<h2 class="text-center text-info mt-5 "> Login de Usuario </h2>
			<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="email" class="form-control mt-4" name="user" id="user" placeholder="email" required>
					<input type="password" class="form-control mt-4" name="pass" id="pass" placeholder="password" required>
        <input type="submit"  name="Ingreso" value="Ingresar" class="btn btn-info mt-4 ">
				</form>
			</div>

                </form>
                <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="Reestablecer.html" class="text-body text-info">Recuperar pasword?</a>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
            </svg>
            <a href="soporte.html" class="text-body">Ayuda</a>
        </div>
		</div>
	</div>
</div>
</div>
 <script src="js\bootstrap.min.js"></script>
</body>
</html>
