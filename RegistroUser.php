<?php
include 'include/conect.php';

 ?>
<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="js/jquery"></script>
    <title> Registro | Usuario </title>
</head>
<body onload="findMe();">
    <script>
        alert("En mantenimiento");
    </script>
    <div class="text-center">
        <span class="text-info"><h2>Registro Ofertante</h2></span>
    </div>
    <div class="container">
        <div class="row py-3 text-center">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="py-2"></div>
                <span class="text-warning">Datos Usuario</span>
                <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="name" class="form-control" placeholder="Nombre" aria-label="nombre" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido paterno" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="date" class="form-control" placeholder="Fecha de nacimiento" aria-label="fecha" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Correo" aria-label="correo" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Telefono" aria-label="telefono" aria-describedby="addon-wrapping" required>
                </div>
                 <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="password" class="form-control" placeholder="pasword" aria-label="pass" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group mb-3">

                    <select class="form-control" name="genero">

                         <option selected>Genero</option>
                     <option value="1">Masculino</option>
  <option value="2">Femenino</option>


                    </select>

                </div>
</form></form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="py-2"></div>
                <span class="text-warning">Datos Servicio</span>
                <div class="input-group flex-nowrap">
                     <select class="form-control" name="genero">

                         <option selected>oficio</option>
                     <option value="1">Carpintero</option>
  <option value="2">Plomeria</option>
                    <option value="3">Albañileria</option>
                        <option value="2">Cerrajero</option>


                    </select>
                </div>


            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="py-2"></div>
                <span class="text-warning">Selecciona Tu direccion</span>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Calle" aria-label="calle" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Colonia" aria-label="colonia" aria-describedby="addon-wrapping" required>
                </div>

                <div class="input-group flex-nowrap">
                   <select class="form-control" name="Estado">

                         <option selected>Estado</option>
                     <option value="1">Estado de Mexico</option>
  <option value="2">Aguascalientes</option>
                    <option value="3">Baja California </option>
                        <option value="4">Baja California Sur</option>
 <option value="5">Campeche</option>
                        <option value="6">Chiapas</option>
                       <option value="7">Chihuahua</option>
                        <option value="8">Ciudad de Mexico</option>
                        <option value="9">Coahuila</option>
                        <option value="10">Colima</option>
                       <option value="11">Durango</option>
                    </select>
                </div>

                <div class="input-group flex-nowrap">
                    <select class="form-control" name="Municipio">

                         <option selected>Municipio</option>
                     <option value="1">Naucalpan</option>
  <option value="2">Tlanepantla</option>
                    <option value="3">Toluca</option>
                        <option value="4">Acambay</option>
 <option value="5">Acolman</option>
                        <option value="6">Aculco</option>
                       <option value="7">Almoloya de Alquisiras</option>
                        <option value="8">Almoloya de Juarez</option>
                        <option value="9">Almoloya del rio</option>
                        <option value="10">Amanalco</option>
                    </select>
                </div>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="No Int - No Ext" aria-label="Domicilio" aria-describedby="addon-wrapping" required>
                </div>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text"></span>
                    <input type="text" class="form-control" placeholder="Codigo Postal" aria-label="CP" aria-describedby="addon-wrapping" required>
                </div>



                <div id="map"></div>
                <script src="js/mains.js"></script>
            </div>



        </div>
    </div>
    <!-- Button trigger modal -->
    <div class="text-center">

        <div class="text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Ver Terminos y condiciones
        </button>
    </div>

    <!-- Modal -->

        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Terminos y condiciones</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            TERMINOS Y CONDICIONES
                            Este contrato describe los términos y condiciones generales aplicables al uso de los
                            contenidos, y servicios ofrecidos a través del sitio Huitzilopochtli Soft
                            INFORMACION RELEVANTE
                            Es requisito necesario para la adquisición de los servicios que se ofrecen en este sitio, que
                            lea y acepte los siguientes Términos y Condiciones que a continuación se redactan. El uso
                            de nuestros servicios implicara que usted ha leído y aceptado los Términos y Condiciones
                            en el presente documento. Todos los servicios que son ofrecidos por nuestro sitio web
                            podrán ser contratados. En este caso, para adquirir nuestro servicio, será necesario el
                            registro por parte del usuario, con ingreso de datos personales fidedignos y definición de
                            una contraseña.



                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Acepto los terminos</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="login.html"><button type="button" class="btn btn-primary">Acerptar y continuar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script async
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB97bWpiM01b_w0ZQ9sKkhM2gmYudR4w6U&callback=initMap">
        </script>
</body>
</html>
