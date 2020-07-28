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
                         <div class="item item-indexempleados">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                            <h1>Empleados</h1>
                                             <h3>Aquí encontrarás información sobre los empleados</h3>
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
        <div id="tabla-principal" style="background: white; width: auto; height: 1080; padding: 30px;">
            <div id="tabla-contenedor" style="background: white; height: 900px; width: 1200px; margin-right: auto; margin-left: auto; margin-top: 100px;">
                <div id="tabla-tabla" style="background: white; padding: 30px; margin-top: 100px; width: 88%; margin-left: auto; margin-right: auto; height: 67%; ">
                    <table class="table">
                        <thead>
                           <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                               <td>Apellido paterno</td>
                               <td>Apellido paterno</td>
                               <td>Telefono</td>
                               <td></td>
                           </tr> 
                        </thead>
                        <tbody>
                            @foreach($lista_empleados as $emp)
                            <tr>
                                <td> {{$emp->IDem}} </td>
                                <td> {{$emp->Nombreem}} </td>
                                <td>{{$emp->Apellido1}}</td>
                                <td>{{$emp->Apellido2}}</td>
                                <td>{{$emp->Telefono}}</td>
                                <td>
                                   <a href="{{route('empleados.edit',$emp->IDem)}}">Modificar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="<?php echo route('empleados.create'); ?>" class="btn btn-dark">Crear</a>
                </div>
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