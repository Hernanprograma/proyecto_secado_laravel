<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-minimize">
      <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
      <a class="navbar-brand" style="margin:0px;" href="/home">
        <img style="width: 120px;"class="img-responsive" src="{{asset('img/logo.png')}}"/>


      </a>
    </div>
    <div class="collapse navbar-collapse">



      <ul class="nav navbar-nav navbar-right">


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="ti-user	"></i>
                    <p>{{ Auth::user()->name }}</p>
                    <b class="caret"></b>
                  </a>
          <ul class="dropdown-menu">
          

            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                              Cerrar Sesion
                                          </a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>

          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">


        <li class="">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            @if(count(Auth::user()->roles)>0)
              @foreach(Auth::user()->roles as $role)
                <i class="ti-server	"></i> {{ $role->name }}
                @endforeach
                @elseif(count(Auth::user()->roles)==0)

                  <i class="ti-server	"></i> No tienes roles asignados
                  @endif


          </a>

        </li>
      </ul>
    </div>
  </div>
</nav>
@if (session('info'))
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="alert alert-success">
        {{session('info')}}
      </div>
    </div>
  </div>
</div>
@endif
