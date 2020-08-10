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
        @if ($cliente->estado == 'Inactivo')
       <div style="background: #FF0000; margin: 0; width: auto; height: 40px;">
       </div>
       <div style="background: #FFFFFF; text-align: center;"><h1>Inactivo</h1></div>
       @endif
                    <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Cliente<small></small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="/img/cliente.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h2> Cliente </h2>
                              </div>
                              <ul class="social-icon">
                                   <li><h3>ID:</h3>{{ $cliente->IDcli }}</li>
                                   <br>
                                   <li><h3>Nombre:  </h3>{{ $cliente->Nombrecli }} {{$cliente->Apellido1}} {{$cliente->Apellido2}}</li>
                                   <br>
                                   <li><h3>Dirección: </h3>
                                    {{ $cliente->Direccion }}<br>
                                    <a href="https://maps.google.com/?q={{$cliente->Direccion}}" target="_blank"><small>(Ver en Google Maps)</small></a>
                                   </li>
                                   <br>
                                   <li><h3>Telefono: </h3>{{$cliente->Telefono}} </li>
                              </ul>
                         </div>
                    </div>

                     <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="/img/cliente.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h2> Adicionales </h2>
                              </div>
                              <ul class="social-icon">
                                   <li><h3>Número de vehiculos:</h3>{{ $num_vh}}</li>
                                   <br>
                                   <li><h3>Número de citas:  </h3>{{ $num_citas }}</li>
                                   <br>
                              </ul>
                         </div>

                         
                    </div>
               </div>
          </div>
     </section>

     <div id="principal">
      <div class="titulo" style="margin-top: 1em;">
        <h3 style="text-align: center;">Vehiculos</h3>
      </div>
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
                               <td><h4>Matricula</h4></td>
                               <td><h4>Marca</h4></td>
                               <td><h4>Modelo</h4></td>
                               <td></td>
                           </tr> 
                        </thead>
                        <tbody>
                            @foreach($lista_vehiculos as $vh)
                            <tr>
                                <td>{{$vh->matricula}}</td>
                                <td>{{$vh->marca}}</td>
                                <td>{{$vh->modelo}}</td>
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
                </div>
        </div>

        <div id="footer" style=" margin-top: 30px;">
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