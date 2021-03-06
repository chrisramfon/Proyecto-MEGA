<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Taller Autoelectrico MEGA</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="/plantilla/css/bootstrap.min.css">
     <link rel="stylesheet" href="/plantilla/css/font-awesome.min.css">
     <link rel="stylesheet" href="/plantilla/css/owl.carousel.css">
     <link rel="stylesheet" href="/plantilla/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/plantilla/css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
     <!-- Imagen -->
<section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-rvehiculo">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                            <h1>Registro de Empleado</h1>
                                             <h3>Ingresa la información para registrar a un empleado</h3>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>
     <!-- MENU -->
     


    <div id="principal">
        <div id="header">
            @extends('menu2')
        </div>
        <div id="titulo" class="section-tittle" align="center" style="margin-top: 70px;">
            <h2>Registro
            <small><br>Ingresa la información del empleado</small></h2>
        </div>
        <div id="media">
            <div id="formu" align="center" style="margin-bottom: 70px">
                <br>
                <br>
                <form id="registroEmpleado" class="entry-form" method="post" action=" {{ route('empleados.store') }} ">
                    {!! csrf_field() !!}
                    <input type="text" name="nombre" placeholder="NOMBRE" class="form-control" id="nombre">
                    {!!$errors->first('nombre', '<h3 class="alerta">:message</h3>')!!}
                    <input type="text" name="apellido1" placeholder="PATERNO" class="form-control" id="apellido1">
                    {!!$errors->first('apellido1', '<h3 class="alerta">:message</h3>')!!}
                    <input type="text" name="apellido2" placeholder="MATERNO" class="form-control" id="apellido2">
                    {!!$errors->first('apellido2', '<h3 class="alerta">:message</h3>')!!}
                    <input type="text" name="direccion" placeholder="DIRECCIÓN" class="form-control" id="direccion">
                    {!!$errors->first('direccion', '<h3 class="alerta">:message</h3>')!!}
                    <input type="text" name="telefono" placeholder="TELEFONO" class="form-control" id="telefono">  
                    {!!$errors->first('telefono', '<h3 class="alerta">:message</h3>')!!}
                    <input type="text" name="usuario" placeholder="USUARIO" class="form-control" id="usuario">  
                    {!!$errors->first('usuario', '<h3 class="alerta">:message</h3>')!!}
                    <input type="password" name="contrasenia" placeholder="CONTRASEÑA" class="form-control" id="contrasenia">  
                    {!!$errors->first('contrasenia', '<h3 class="alerta">:message</h3>')!!}
                    <input type="submit" name="enviar" name="enviar" value="REGISTRAR" class="section-btn" id="enviar">
                </form>
            </div>
        </div>
        <div id="footer">
            @extends('piepagina')
        </div>
    </div>

     <!-- SCRIPTS -->
     <script src="/plantilla/js/jquery.js"></script>
     <script src="/plantilla/js/bootstrap.min.js"></script>
     <script src="/plantilla/js/owl.carousel.min.js"></script>
     <script src="/plantilla/js/smoothscroll.js"></script>
     <script src="/plantilla/js/custom.js"></script>

</body>
</html>