<div class="sidebar" data-background-color="brown" data-active-color="danger">
  <!--
Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->


  <div class="logo">
    <a href="/" class="simple-text">
       &nbsp &nbsp Panel de Control
  </a>
  </div>
  <div class="sidebar-wrapper">




    <ul class="nav">

      <?php if (\Shinobi::can('home.index')): ?>
      <li id="nav-dash">
        <a href="/home">
              <i class="ti-panel"></i>
              <p>Dashboard</p>
            </a>
      </li>
      <?php endif; ?>


      <li id="nav-lecturas_secado">
        <a data-toggle="collapse" href="#lecturas_secado">
                      <i class="ti-ruler-pencil"></i>
                      <p>
            Lecturas secado
                         <b class="caret"></b>
                      </p>
                  </a>
        <div class="collapse" id="lecturas_secado">
          <ul class="nav">


            <?php if (\Shinobi::can('linea_muestras.index')): ?>
            <li id="nav-linea_muestras">
              <a href="<?php echo e(route('linea_muestras.index')); ?>">
                <span class="sidebar-mini">Lin</span>
                <span class="sidebar-normal">Muestras de linea</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('centrifugas.index')): ?>
            <li id="nav-cent">
              <a href="<?php echo e(route('centrifugas.index')); ?>">
                <span class="sidebar-mini">Cen</span>
                <span class="sidebar-normal">Centrífugas</span>

                  </a>
            </li>
            <?php endif; ?>
            <?php if (\Shinobi::can('poli_marcas.index')): ?>
            <li id="nav-poli">
              <a href="<?php echo e(route('poli_marcas.index')); ?>">
                <span class="sidebar-mini">Mar</span>
                <span class="sidebar-normal">Marcas de poli</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('simbioticas.index')): ?>
            <li id="nav-simbio">
              <a href="<?php echo e(route('simbioticas.index')); ?>">
                <span class="sidebar-mini">Sim</span>
                <span class="sidebar-normal">Simbiotica</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('linea_datos.index')): ?>
            <li id="nav-linea_datos">
              <a href="<?php echo e(route('linea_datos.index')); ?>">
                <span class="sidebar-mini">Dat</span>
                <span class="sidebar-normal">Datos de la linea</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('marcha_centrifugas.index')): ?>
            <li id="nav-marcha_centrifugas">
              <a href="<?php echo e(route('marcha_centrifugas.index')); ?>">
                <span class="sidebar-mini">Mc</span>
                <span class="sidebar-normal">Marcha Paro Centrífugas</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('gasto_polis.index')): ?>
            <li id="nav-gasto_polis">
              <a href="<?php echo e(route('gasto_polis.index')); ?>">
                <span class="sidebar-mini">Gp</span>
                <span class="sidebar-normal">Gasto de Polielectrolito</span>
                  </a>
            </li>
            <?php endif; ?>

          </ul>
        </div>
      </li>

      <?php if (\Shinobi::can('turnos.index')): ?>
      <li id="nav-turnos">
        <a href="<?php echo e(route('turnos.index')); ?>">
              <i class="ti-calendar"></i>
              <p>Turnos secado</p>
            </a>
      </li>
      <?php endif; ?>


      <li id="nav-informes">
        <a data-toggle="collapse" href="#informes">
                      <i class="ti-map"></i>
                      <p>
            Informes
                         <b class="caret"></b>
                      </p>
                  </a>
        <div class="collapse " id="informes" data-toggle="false">
          <ul class="nav">
            <?php if (\Shinobi::can('gasto_polis.informe')): ?>
            <li id="nav-informes-poli">
              <a href="<?php echo e(route('gasto_polis.informe')); ?>">
                <span class="sidebar-mini">Po</span>
                <span class="sidebar-normal">Gasto de poli</span>
              </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('centrifugas.informe')): ?>
            <li id="nav-centrifugas">
              <a href="<?php echo e(route('centrifugas.informe')); ?>">
            <span class="sidebar-mini">Cen</span>
            <span class="sidebar-normal">Centrifugas</span>
          </a>
            </li>
            <?php endif; ?>

          </ul>
        </div>
      </li>

      <li id="nav-gestion">
        <a data-toggle="collapse" href="#gestion">
                      <i class="ti-user"></i>
                      <p>
            Gestion personal
                         <b class="caret"></b>
                      </p>
                  </a>
        <div class="collapse" id="gestion">
          <ul class="nav">
            <?php if (\Shinobi::can('users.index')): ?>
            <li id="nav-user">
              <a href="<?php echo e(route('users.index')); ?>">
                <span class="sidebar-mini">Usu</span>
                <span class="sidebar-normal">Usuarios</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('roles.index')): ?>
            <li id="nav-roles">
              <a href="<?php echo e(route('roles.index')); ?>">
                <span class="sidebar-mini">Ro</span>
                <span class="sidebar-normal">Roles</span>
                  </a>
            </li>
            <?php endif; ?>

            <?php if (\Shinobi::can('permisos.index')): ?>
            <li id="nav-permisos">
              <a href="<?php echo e(route('permisos.index')); ?>">
                <span class="sidebar-mini">Per</span>
                <span class="sidebar-normal">Permisos</span>
                  </a>
            </li>
            <?php endif; ?>


          </ul>
        </div>
      </li>








      <?php if (\Shinobi::can('nivels.index')): ?>
      <li id="nav-nivels">
        <a href="<?php echo e(route('nivels.index')); ?>">
              <i class="ti-dashboard"></i>
              <p>Niveles</p>
            </a>
      </li>
      <?php endif; ?>





     



      


    </ul>

    </li>
    </ul>
  </div>
</div>
