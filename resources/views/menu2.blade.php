<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="<?php echo route('registrar'); ?>" class="navbar-brand">MEGA</a>

               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                          <li><a href="<?php echo route('Cita.index'); ?>" class="smoothScroll">Citas</a></li>
                          <li><a href="<?php echo route('vehiculos.index') ?>" class="smoothScroll">Vehiculos</a></li>
                          <li><a href="<?php echo route('clientes.index') ?>" class="smoothScroll">Clientes</a></li>
                          <li><a href=" <?php echo route('empleados.index') ?> " class="smoothScroll">Empleados</a></li>
                          <li><a href="<?php echo route('salir'); ?>" class="smoothScroll">Salir</a></li>
                    </ul>

                   
               </div>

          </div>
     </section>
     @yield('contenido')