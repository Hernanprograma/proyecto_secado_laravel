{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="../../{{asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Regitrate como empleado de Global Omnium</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

  <!--  Paper Dashboard core CSS    -->
  <link href="{{asset('css/paper-dashboard.css')}}" rel="stylesheet"/>


  <!--  Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-toggle-black" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar "></span>
          <span class="icon-bar "></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="login" class="btn">
              Volver
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="wrapper wrapper-full-page">
    <div class="register-page">
      <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="header-text">
                <h2>Global Omnium</h2>
                <h4>Regitrate como empleado</h4>
                <hr>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-2">
              <div class="media">
                <div class="media-left">
                  <div class="icon icon-danger">
                    <i class="ti ti-user"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5>Usuario nuevo</h5>
                Necesitas realizar este paso para poder acceder a nuestro <strong>portal</strong>.
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <div class="icon icon-warning">
                    <i class="ti-bar-chart-alt"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5>Facilidades </h5>
                  Podrás realizar todas las gestiones que necesites desde nuestra web.
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <div class="icon icon-info">
                    <i class="ti-mobile"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5>En la palma de tu mano</h5>
                  Usa la plataforma desde cualquier dispositivo movil .
                </div>
              </div>
            </div>
            <div class="col-md-4">

                <form  role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                <div class="card card-plain">
                  <div class="content">


                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" placeholder="Nombre" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                      <input id="surname" placeholder="Apellidos" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" placeholder="Correo electrónico" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password"  placeholder="Contraseña" type="password" class="form-control" name="password" required>
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group">
                    <input id="password-confirm" placeholder="Repite Contraseña" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>
                  <div class="footer text-center">
                    <button type="submit" class="btn btn-fill btn-danger btn-wd">Crea una cuenta</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      @include("partials.footer")
    </div>
  </div>
</body>

@include('partials.scripts')


</html>
