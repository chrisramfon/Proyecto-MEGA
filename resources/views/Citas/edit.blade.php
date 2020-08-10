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
                         <div class="item item-estadocitas">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                            <h1>Modificación del estado de la cita</h1>
                                             <h3>Utiliza la lista de opciones para cambiar el estado de la cita</h3>
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
            <h2>Modificar
            <small><br>Para guardar los cambios da clic en "Guardar"</small></h2>
        </div>
        <div id="media">
            <div id="formu" align="center" style="margin-bottom: 70px">
                <br>
                <br>
                <form id="registroCita" class="entry-form" method="post" action="{{ route('citas.update', $cita_editar->IDcita)}}">
                    {!!method_field('PUT')!!}
                    {!! csrf_field() !!}
                    <div class="custom-select">
                    <select name="estado" id="estado">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                    </div>
                    <input type="submit" name="enviar" name="enviar" value="GUARDAR" class="section-btn" id="enviar">
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
     <script src="/plantilla/js/select.js"></script>

</body>
</html>