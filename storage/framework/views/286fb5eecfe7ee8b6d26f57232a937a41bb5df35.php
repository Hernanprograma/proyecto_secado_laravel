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
      <li id="nav-dash">
        <a href="/home">
              <i class="ti-panel"></i>
              <p>Dashboard</p>
            </a>
      </li>
      <?php if (\Shinobi::can('centrifugas.index')): ?>
      <li id="nav-cent">
        <a href="<?php echo e(route('centrifugas.index')); ?>">
              <i class="ti-bolt"></i>
              <p>Centrífugas</p>

            </a>
      </li>
      <?php endif; ?>
      <?php if (\Shinobi::can('users.index')): ?>
      <li id="nav-inver">
        <a href="<?php echo e(route('users.index')); ?>">
              <i class="ti-harddrive"></i>
              <p>Usuarios</p>
            </a>
      </li>
      <?php endif; ?>
        <?php if (\Shinobi::can('roles.index')): ?>
      <li id="nav-histo">
        <a href="<?php echo e(route('roles.index')); ?>">
              <i class="ti-stats-up"></i>
              <p>Roles</p>
            </a>
      </li>
    <?php endif; ?>

      <li id="nav-not">
        <a href="notificaciones">
              <i class="ti-bell"></i>
              <p>Notificaciones</p>
            </a>
      </li>
      <li id="nav-user">
        <a href="userprofile">
              <i class="ti-user"></i>
              <p>Perfil de usuario</p>
            </a>
      </li>
    </ul>

    </li>
    </ul>
  </div>
</div>
