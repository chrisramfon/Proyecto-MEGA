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
                         <div class="item item-indexvehiculos">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                            <h1>Vehículos</h1>
                                             <h3>Aqui encontrarás la información de los vehiculos de los clientes</h3>
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
        <div id="tabla-principal">
            <div id="tabla-contenedor" >
                <div id="tabla-tabla" >
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                           <tr>
                                <td><h4>Id</h4></td>
                                <td><h4>Cliente</h4></td>
                               <td><h4>Matricula</h4></td>
                               <td><h4>Marca</h4></td>
                               <td><h4>Modelo</h4></td>
                               <td><h4>Estado</h4></td>
                               <td></td>
                           </tr> 
                        </thead>
                        <tbody>
                            @foreach($lista_vehiculos as $vh)
                            <tr>
                                <td> {{$vh->IDcli}} </td>
                                <td> {{$vh->Nombrecli}} </td>
                                <td>{{$vh->matricula}}</td>
                                <td>{{$vh->marca}}</td>
                                <td>{{$vh->modelo}}</td>
                                <td> {{$vh->estado}} </td>
                                <td>
                                   <h5>
                                     <a href="{{route('vehiculos.show',$vh->matricula)}}">(Ver)</a>
                                   </h5>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div style="float: right;">{{ $lista_vehiculos->links() }}</div>
                    
                    <a href="<?php echo route('vehiculos.create'); ?>" class="btn btn-dark">Crear</a>
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