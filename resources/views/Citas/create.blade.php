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
            <small><br>Ingresa la información para registrate</small></h2>
        </div>
        <div id="media">
            <div id="formu" align="center" style="margin-bottom: 70px">
                <br>
                <br>
                <form id="registroUsuario" class="entry-form" action="registro" method="post" action=" {{ route('Cita.store') }} ">
                    {!! csrf_field() !!}
                    <h3>HORA</h3>
                    <input type="time" name="hora" placeholder="HORA" class="form-control" id="hora">
                    <h3>FECHA</h3>
                    <input type="date" name="fecha" placeholder="FECHA" class="form-control" id="fecha">
                    <input type="text" name="comentarios" placeholder="COMENTARIOS" class="form-control" id="comentarios">
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