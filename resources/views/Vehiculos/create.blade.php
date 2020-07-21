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
            <h2>Registro
            <small><br>Ingresa la información del vehículo</small></h2>
        </div>
        <div id="media">
            <div id="formu" align="center" style="margin-bottom: 70px">
                <br>
                <br>
                <form id="registroVehiculo" class="entry-form" method="post" action=" {{ route('vehiculos.store') }} ">
                    {!! csrf_field() !!}
                    <input type="text" name="matricula" placeholder="MATRICULA" class="form-control" id="matricula">
                    <input type="text" name="marca" placeholder="MARCA" class="form-control" id="marca">
                    <input type="text" name="modelo" placeholder="MODELO" class="form-control" id="modelo">
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