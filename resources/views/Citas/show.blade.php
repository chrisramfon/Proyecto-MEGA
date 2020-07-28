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
       
        <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Cita <small></small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="/img/cita.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h2> Cita </h2>
                              </div>
                              <ul class="social-icon">
                                   <li><h3>Id: {{ $cita->IDcita }}</h3></li>
                                   <br>
                                   <li><h3>Hora: {{ $cita->Hora }} </h3></li>
                                   <li><br></li>
                                   <li><h3>Fecha: {{ $cita->Fecha }} </h3></li>
                                   <br>
                                   <li><h3>Comentarios: {{$cita->Comentarios}}</h3></li>
                              </ul>
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
                                   <li><h3>Matricula: {{ $vehiculo->matricula }}</h3></li>
                                   <br>
                                   <li><h3>Marca: {{ $vehiculo->marca }} </h3></li>
                                   <li><br></li>
                                   <li><h3>Modelo: {{ $vehiculo->modelo }} </h3></li>
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
                                   <li><h3>Nombre: {{ $cliente->Nombrecli }}  {{ $cliente->Apellido1 }} </h3></li>
                                   <br>
                                   <li><h3>Telefono: {{ $cliente->Telefono }} </h3></li>
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