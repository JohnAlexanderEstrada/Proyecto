<?php
include 'include/Conect.php';
include 'validar.php';
?>

 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
               <h3 class="text-danger text-center">ServiWorkersPlace</h3>
                <img src="img/logoo.png" class="img-fluid"
                     alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h2 class="text-warning">Por favor ingresa tus datos para iniciar sesion</h2>
                <form action="<?php echo $_SERVER ?>" method="post">
                    <span class="input-group-text" id="inputGroupPrepend"> @
                    <input type="email" id="mail" class="form-control" name="correo" placeholder="Correo" required />
                    </span>
                    <p>Ingrese su correo</p>
                     <span class="input-group-text" id="inputGroupPrepend"> *
                    <input type="password" id="pass" class="form-control" name="contra" placeholder="Contrase�a" required />
                    </span>
                    <p>Ingrese su contrase�a</p>
                    <button type="submit" onclick="validar()" >Ingresar</button>
                </form>
                <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="Reestablecer.html" class="text-body">Recuperar pasword?</a>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
            </svg>
            <a href="soporte.html" class="text-body">Ayuda</a>
        </div>
                <script>
                    function validar();
                    C1 = document.getElementById(correo).value;
                    C2 = document.getElementById(contra).value;

                    if {
                        C1 = "";

                        alert("Los campos no pueden estar vacios");

                    }
                        else if{
                        C2 = "";
                        alert("Los campos no pueden estar vacios");
                    }
                        else {
                        return = false;

                    }
                </script>

                    <div class="text-center text-lg-start mt-4 pt-2">

                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            No tiene cuenta? <a href="Registro.html"
                                                class="link-danger">Registrese</a>
                        </p>
                    </div>
  </div>




                </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
//(function () {
  //'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  //var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  //Array.prototype.slice.call(forms)
    //.forEach(function (form) {
      //form.addEventListener('submit', function (event) {
        //if (!form.checkValidity()) {
          //event.preventDefault()
          //event.stopPropagation()
        //}

        //form.classList.add('was-validated')
      //}, false)
    //})
//})()
        </script>

    </div>
</section>
