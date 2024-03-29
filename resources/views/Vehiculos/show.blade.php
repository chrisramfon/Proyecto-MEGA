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
       @if ($vehiculo->estado == 'Inactivo')
       <div style="background: #FF0000; margin: 0; width: auto; height: 40px;">
       </div>
       <div style="background: #FFFFFF; text-align: center;"><h1>Inactivo</h1></div>
       @endif
        <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Vehiculo <small></small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="/img/carro.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h2> Vehículo </h2>
                              </div>
                              <ul class="social-icon">
                                   <li><h3>Matricula: </h3>{{ $vehiculo->matricula }}</li>
                                   <br>
                                   <li><h3>Marca: </h3>{{ $vehiculo->marca }} </li>
                                   <li><br></li>
                                   <li><h3>Modelo: </h3>{{ $vehiculo->modelo }} </li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="/img/cliente.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h2> Dueño </h2>
                              </div>
                              <ul class="social-icon">
                                   <li><h3>Nombre: </h3>{{ $cliente->Nombrecli }}  {{ $cliente->Apellido1 }} {{$cliente->Apellido2}} </li>
                                   <br>
                                   <li><h3>Telefono: </h3>{{ $cliente->Telefono }} </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
     </section>

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