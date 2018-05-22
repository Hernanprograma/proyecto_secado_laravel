
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Secado Térmico</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="css/themify-icons.css" rel="stylesheet">
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

                <a class="navbar-brand" href="/"><img style="width: 150px;"class="img-responsive" src="img/logo.png"/></a>


            </div>



            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>

                          <a href="<?php echo e(route('register')); ?>">Registro</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="purple" data-image="img/background/background.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">


                              <form  role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                                  <?php echo e(csrf_field()); ?>


                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Login</h3>

                                    </div>

                                    <div class="card-content">
                                        <div class="form-group">
                                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <label>Correo electrónico</label>
                                              <input id="email" type="email" class="form-control input-no-border" placeholder="Introduce email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                              <?php if($errors->has('email')): ?>
                                              <span class="help-block">
                                                  <strong><?php echo e($errors->first('email')); ?></strong>
                                              </span>
                                              <?php endif; ?>
                                        </div>




                                        <div class="form-group">
                                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                            <label>Contraseña</label>

                                            <input id="password" type="password" class="form-control input-no-border" name="password" required>
                                            <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">

                                        <button type="submit" class="btn btn-fill btn-wd">
                                            Login
                                        </button>

                                        <div class="forgot">
                                          <a  href="<?php echo e(route('password.request')); ?>">
                                            Olvidaste el password?
                                        </a>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>







						 <form id="formdemo" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
								<?php echo e(csrf_field()); ?>





									<div class="card-content">
											<div class="form-group">
													<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

														<input id="email" type="hidden" class="form-control input-no-border"  name="email" value="demo@solarbattmonitor.com">
														<?php if($errors->has('email')): ?>
														<span class="help-block">
																<strong><?php echo e($errors->first('email')); ?></strong>
														</span>
														<?php endif; ?>
											</div>





													<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">


													<input id="password" type="hidden" class="form-control input-no-border" name="password"  value="demodemo" required>
													<?php if($errors->has('password')): ?>
													<span class="help-block">
															<strong><?php echo e($errors->first('password')); ?></strong>
													</span>
													<?php endif; ?>

											</div>

							</div>
					</form>



        	<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                          &copy;2018, made with <i class="fa fa-heart heart"></i> by <a href="http://www.Hernanprograma.es">HernanPrograma</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="js/jquery.validate.min.js"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="js/es6-promise-auto.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="js/moment.min.js"></script>

	<!--  Select Picker Plugin -->
	<script src="js/bootstrap-selectpicker.js"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src="js/bootstrap-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="js/sweetalert2.js"></script>




	<!-- Wizard Plugin    -->
	<script src="js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="js/bootstrap-table.js"></script>



	<!--  Full Calendar Plugin    -->
	<script src="js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

	<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });

	</script>

</html>
