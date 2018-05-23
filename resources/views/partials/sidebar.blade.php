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
      @can ('home.index')
      <li id="nav-dash">
        <a href="/home">
              <i class="ti-panel"></i>
              <p>Dashboard</p>
            </a>
      </li>
      @endcan
      @can ('centrifugas.index')
      <li id="nav-cent">
        <a href="{{route('centrifugas.index')}}">
              <i class="ti-bolt"></i>
              <p>Centrífugas</p>

            </a>
      </li>
      @endcan
      @can ('permisos.index')
      <li id="nav-permisos">
        <a href="{{route('permisos.index')}}">
              <i class="ti-harddrive"></i>
              <p>Permisos</p>
            </a>
      </li>
      @endcan
      @can ('roles.index')
      <li id="nav-roles">
        <a href="{{route('roles.index')}}">
              <i class="ti-stats-up"></i>
              <p>Roles</p>
            </a>
      </li>
      @endcan
      @can ('poli_marcas.index')
      <li id="nav-poli">
        <a href="{{route('poli_marcas.index')}}">
              <i class="ti-bell"></i>
              <p>Marca de poli</p>
            </a>
      </li>
      @endcan
      @can ('users.index')
      <li id="nav-user">
        <a href="{{route('users.index')}}">
              <i class="ti-user"></i>
              <p>Usuarios</p>
            </a>
      </li>
      @endcan
      @can ('simbioticas.index')
      <li id="nav-simbio">
        <a href="{{route('simbioticas.index')}}">
              <i class="ti-infinite"></i>
              <p>Simbiotica</p>

            </a>
      </li>
      @endcan
    </ul>

    </li>
    </ul>
  </div>
</div>
