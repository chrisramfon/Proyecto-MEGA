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


     <!-- MENU -->
     


    <div id="principal">
        <div id="header">
            @extends('menu2')
        </div>
        <div id="titulo" class="section-tittle" align="center" style="margin-top: 70px;">
            <h2>Registro de Cliente
            <small><br>Ingresa la información del cliente</small></h2>
        </div>
        <div id="media">
            <div id="formu" align="center" style="margin-bottom: 70px">
                <br>
                <br>
                <form id="registroCliente" class="entry-form" method="post" action=" {{ route('clientes.store') }} ">
                    {!! csrf_field() !!}
                    <input type="text" name="nombre" placeholder="NOMBRE" class="form-control" id="nombre">
                    <input type="text" name="apellido1" placeholder="PATERNO" class="form-control" id="apellido1">
                    <input type="text" name="apellido2" placeholder="MATERNO" class="form-control" id="apellido2">
                    <input type="text" name="direccion" placeholder="DIRECCIÓN" class="form-control" id="direccion">
                    <input type="text" name="telefono" placeholder="TELÉFONO" class="form-control" id="telefono">
                    <input type="text" name="usuario" placeholder="USUARIO" class="form-control" id="usuario">
                    <input type="password" name="contrasenia" placeholder="CONTRASEÑA" class="form-control" id="contrasenia">
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