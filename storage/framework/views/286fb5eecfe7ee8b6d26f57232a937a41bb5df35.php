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
      <?php if (\Shinobi::can('turnos.index')): ?>
      <li id="nav-turnos">
        <a href="<?php echo e(route('turnos.index')); ?>">
              <i class="ti-infinite"></i>
              <p>Turnos</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('roles.index')): ?>
      <li id="nav-roles">
        <a href="<?php echo e(route('roles.index')); ?>">
              <i class="ti-stats-up"></i>
              <p>Roles</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('permisos.index')): ?>
      <li id="nav-permisos">
        <a href="<?php echo e(route('permisos.index')); ?>">
              <i class="ti-harddrive"></i>
              <p>Permisos</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('users.index')): ?>
      <li id="nav-user">
        <a href="<?php echo e(route('users.index')); ?>">
              <i class="ti-user"></i>
              <p>Usuarios</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('linea_muestras.index')): ?>
      <li id="nav-linea_muestras">
        <a href="<?php echo e(route('linea_muestras.index')); ?>">
              <i class="ti-harddrive"></i>
              <p>Muestras de linea</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('centrifugas.index')): ?>
      <li id="nav-cent">
        <a href="<?php echo e(route('centrifugas.index')); ?>">
              <i class="ti-bolt"></i>
              <p>Centrífugas</p>

            </a>
      </li>
      <?php endif; ?>


      <?php if (\Shinobi::can('poli_marcas.index')): ?>
      <li id="nav-poli">
        <a href="<?php echo e(route('poli_marcas.index')); ?>">
              <i class="ti-bell"></i>
              <p>Marca de poli</p>
            </a>
      </li>
      <?php endif; ?>

      <?php if (\Shinobi::can('simbioticas.index')): ?>
      <li id="nav-simbio">
        <a href="<?php echo e(route('simbioticas.index')); ?>">
              <i class="ti-infinite"></i>
              <p>Simbiotica</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('linea_datos.index')): ?>
      <li id="nav-linea_datos">
        <a href="<?php echo e(route('linea_datos.index')); ?>">
              <i class="ti-rocket"></i>
              <p>Datos de la linea</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('marcha_centrifugas.index')): ?>
      <li id="nav-marcha_centrifugas">
        <a href="<?php echo e(route('marcha_centrifugas.index')); ?>">
              <i class="ti-rocket"></i>
              <p>Estado de centrifugas</p>
            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('gasto_polis.index')): ?>
      <li id="nav-gasto_polis">
        <a href="<?php echo e(route('gasto_polis.index')); ?>">
              <i class="ti-infinite"></i>
              <p>Gasto de Poli</p>
            </a>
      </li>
      <?php endif; ?>

    </ul>

    </li>
    </ul>
  </div>
</div>
