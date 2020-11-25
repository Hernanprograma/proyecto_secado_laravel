<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Secado Termico</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
   <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />



   <!--  Paper Dashboard core CSS-->
   <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet"/>

   <!--  Material Dashboard core CSS    -->
   <link href="{{ asset('css/material-dashboard.css')}}" rel="stylesheet" />





   <!-- amCharts javascript sources -->
   <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
   <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>



   <!--  Fonts and icons     -->
   <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
   {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
   <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Secado Termico</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="/register">
                            Registro
                        </a>
                    </li>
					<li>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
		<div class="wrapper wrapper-full-page">
				<div class="full-page login-page" data-color="" data-image="{{asset('img/background/background.jpg')}}">
				<!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
						<div class="content">
								<div class="container">
										<div class="row">
												<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">


													<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
															{{ csrf_field() }}

																<div class="card" data-background="color" data-color="blue">
																		<div class="card-header">
																				<h3 class="card-title">Reset Password</h3>
																		</div>

																		<div class="card-content">


															<input type="hidden" name="token" value="{{$token}}">

															<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
																	<label for="email" class="col-md-4 control-label">Correo Electrónico</label>

																	<div class="col-md-6">
																			<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

															<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
																	<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
																	<div class="col-md-6">
																			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

																			@if ($errors->has('password_confirmation'))
																					<span class="help-block">
																							<strong>{{ $errors->first('password_confirmation') }}</strong>
																					</span>
																			@endif
																	</div>
															</div>

															<div class="form-group">
																	<div class="col-md-6 col-md-offset-4">
																			<button type="submit" class="btn btn-primary">
																					Reset Password
																			</button>
																	</div>
															</div>
													</form>
                        </div>
                    </div>
                </div>
            </div>

        	<footer class="footer footer-transparent">
                <div class="container">
                  <div class="copyright pull-right">
                     2018, Hecho con <i class="ti-heart"></i> by <a href="https://www.linkedin.com/in/hernanrodriguezvalls/">Hernan Rodríguez Valls</a>&nbsp;<i class="ti-linkedin"></i>


                  </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<!--   Variables globales a todos los scripts   -->
<script src="{{ asset('js/config.js')}}"></script>


<!--   Core JS Files   -->
<!--<script src="js/jquery-1.10.2.js" type="text/javascript"></script>-->
<script src="{{ asset('js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('js/bootstrap-checkbox-radio.js')}}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('js/bootstrap-notify.js')}}"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('js/paper-dashboard.js')}}"></script>



<!--  Forms Validations Plugin -->
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="{{ asset('js/es6-promise-auto.min.js')}}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('js/moment.min.js')}}"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<!--<script src="js/bootstrap-datetimepicker.js')}}"></script>-->

<!--  Date Time Picker Plugin is included in this js file -->
<!--<script src="js/bootstrap-datetimepicker.min.js')}}"></script>-->

<!--  Select Picker Plugin -->
<script src="{{ asset('js/bootstrap-selectpicker.js')}}"></script>

<!--  Switch and Tags Input Plugins -->
<script src="{{ asset('js/bootstrap-switch-tags.js')}}"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<!--<script src="js/bootstrap-datepicker.js')}}"></script>-->

<!--  Date Time Picker local js file -->
<!--<script src="js/bootstrap-datepicker.es.min.js')}}"></script>-->

<!--  Date Time Picker local js file -->
<!--<script src="js/bootstrap-datepicker.es.min.js')}}"></script>-->

<!--  Date Time Picker local js file -->
<script src="{{ asset('js/picker.js')}}"></script>

<!--  Date Time Picker date js file -->
<script src="{{ asset('js/picker.date.js')}}"></script>
<!--  Date Time Picker time js file -->
<script src="{{ asset('js/picker.time.js')}}"></script>
<!--  Date Time Picker time js file -->
<script src="{{ asset('js/es_ES.js')}}"></script>



<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>





<!--  Notifications Plugin    -->
<script src="{{ asset('js/bootstrap-notify.js')}}"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('js/sweetalert2.js')}}"></script>

<!-- Vector Map plugin -->
<script src="{{ asset('js/jquery-jvectormap.js')}}"></script>



<!-- Wizard Plugin    -->
<script src="{{ asset('js/jquery.bootstrap.wizard.min.js')}}"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset('js/bootstrap-table.js')}}"></script>

<!--  Plugin for DataTables.net  -->
<script src="{{ asset('js/jquery.datatables.js')}}"></script>

<!--  Full Calendar Plugin    -->
<script src="{{ asset('js/fullcalendar.min.js')}}"></script>
<!-- Wizard Plugin    -->

<script src="{{ asset('js/jquery.easypiechart.min.js')}}"></script>




<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>


</html>
