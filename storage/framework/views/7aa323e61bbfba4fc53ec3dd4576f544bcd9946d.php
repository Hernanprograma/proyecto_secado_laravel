


<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Secado Térmico</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
 <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />


 <!-- datatimepicker  CSS    -->
 <!--<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>-->



 <!--  Paper Dashboard core CSS-->
 <link href="<?php echo e(asset('css/paper-dashboard.css')); ?>" rel="stylesheet"/>

 <!--  Material Dashboard core CSS    -->
 <link href="<?php echo e(asset('css/material-dashboard.css')); ?>" rel="stylesheet" />


 <!--  general Dashboard core CSS    -->
 

 <!-- datepicker  CSS    -->
 <!--<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>-->



 
 
 <!-- cdn for modernizr, if you haven't included it already -->



 <!-- amCharts javascript sources -->
 <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
 <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>



 <!--  Fonts and icons     -->
 <link href="<?php echo e(asset('css/themify-icons.css')); ?>" rel="stylesheet">
 
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
				<a class="navbar-brand" href="/">Secado Térmico</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/register">
							Registro
						</a>
					</li>
					<li>
						<a href="/">
							Home
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="wrapper wrapper-full-page">
		<div class="full-page login-page" data-color="" data-image="<?php echo e(asset('img/background/background.jpg')); ?>">
			<!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">


							<form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/password/email')); ?>">
								<?php echo e(csrf_field()); ?>


								<div class="card" data-background="color" data-color="blue">
									<div class="card-header">
										<h3 class="card-title">Resetear Password</h3>
									</div>

									<div class="card-content">
										<div class="flash-message">
										    <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										      <?php if(Session::has('alert-' . $msg)): ?>

										      <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
										      <?php endif; ?>
										    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										  </div> <!-- end .flash-message -->

										<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
											<label for="email" class="col-md-4 control-label">Correo Electrónico</label>

											<div class="col-md-6">
												<input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>

												<?php if($errors->has('email')): ?>
													<span class="help-block">
														<strong><?php echo e($errors->first('email')); ?></strong>
													</span>
												<?php endif; ?>
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<button type="submit" class="btn btn-primary">
													Enlace de restablecimiento de contraseña
												</button>
											</div>
										</div>
									</form>
								</div>
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
<script src="<?php echo e(asset('js/config.js')); ?>"></script>


<!--   Core JS Files   -->
<!--<script src="js/jquery-1.10.2.js" type="text/javascript"></script>-->
<script src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo e(asset('js/bootstrap-checkbox-radio.js')); ?>"></script>

<!--  Charts Plugin -->
<script src="<?php echo e(asset('js/chartist.min.js')); ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo e(asset('js/bootstrap-notify.js')); ?>"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="<?php echo e(asset('js/paper-dashboard.js')); ?>"></script>



<!--  Forms Validations Plugin -->
<script src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="<?php echo e(asset('js/es6-promise-auto.min.js')); ?>"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<!--<script src="js/bootstrap-datetimepicker.js')}}"></script>-->

<!--  Date Time Picker Plugin is included in this js file -->
<!--<script src="js/bootstrap-datetimepicker.min.js')}}"></script>-->

<!--  Select Picker Plugin -->
<script src="<?php echo e(asset('js/bootstrap-selectpicker.js')); ?>"></script>

<!--  Switch and Tags Input Plugins -->
<script src="<?php echo e(asset('js/bootstrap-switch-tags.js')); ?>"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<!--<script src="js/bootstrap-datepicker.js')}}"></script>-->

<!--  Date Time Picker local js file -->
<!--<script src="js/bootstrap-datepicker.es.min.js')}}"></script>-->

<!--  Date Time Picker local js file -->
<!--<script src="js/bootstrap-datepicker.es.min.js')}}"></script>-->

<!--  Date Time Picker local js file -->
<script src="<?php echo e(asset('js/picker.js')); ?>"></script>

<!--  Date Time Picker date js file -->
<script src="<?php echo e(asset('js/picker.date.js')); ?>"></script>
<!--  Date Time Picker time js file -->
<script src="<?php echo e(asset('js/picker.time.js')); ?>"></script>
<!--  Date Time Picker time js file -->
<script src="<?php echo e(asset('js/es_ES.js')); ?>"></script>



<script src="<?php echo e(asset('js/bootstrap-datepicker.js')); ?>"></script>





<!--  Notifications Plugin    -->
<script src="<?php echo e(asset('js/bootstrap-notify.js')); ?>"></script>

<!-- Sweet Alert 2 plugin -->
<script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>

<!-- Vector Map plugin -->
<script src="<?php echo e(asset('js/jquery-jvectormap.js')); ?>"></script>



<!-- Wizard Plugin    -->
<script src="<?php echo e(asset('js/jquery.bootstrap.wizard.min.js')); ?>"></script>

<!--  Bootstrap Table Plugin    -->
<script src="<?php echo e(asset('js/bootstrap-table.js')); ?>"></script>

<!--  Plugin for DataTables.net  -->
<script src="<?php echo e(asset('js/jquery.datatables.js')); ?>"></script>

<!--  Full Calendar Plugin    -->
<script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>
<!-- Wizard Plugin    -->

<script src="<?php echo e(asset('js/jquery.easypiechart.min.js')); ?>"></script>

</html>
