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
        <div id="tabla-principal" >
            <div id="tabla-contenedor" >
                <div id="tabla-tabla" >
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                           <tr>
                                <td><h4>Id</h4></td>
                                <td><h4>Nombre</h4></td>
                               <td><h4>Apellido paterno</h4></td>
                               <td><h4>Apellido paterno</h4></td>
                               <td><h4>Telefono</h4></td>
                               <td><h4>Estado</h4></td>
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
                                <td> {{$emp->estado}} </td>
                                <td>
                                  <h5>
                                     <a href="{{route('empleados.edit',$emp->IDem)}} ">(Modificar) </a> <br>
                                     <a href="{{route('empleados.show',$emp->IDem)}}">(Ver)</a>
                                  </h5>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div style="float: right;">{{ $lista_empleados->links() }}</div>
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