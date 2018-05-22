
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../<?php echo e(asset('img/apple-icon.png')); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="../../<?php echo e(asset('img/favicon.png')); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Regitrate como empleado de Global Omnium</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" />

  <!--  Paper Dashboard core CSS    -->
  <link href="<?php echo e(asset('css/paper-dashboard.css')); ?>" rel="stylesheet"/>


  <!--  Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="<?php echo e(asset('css/themify-icons.css')); ?>" rel="stylesheet">
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

                <form  role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                    <?php echo e(csrf_field()); ?>

                <div class="card card-plain">
                  <div class="content">


                      <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <input id="name" placeholder="Nombre" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                        <?php if($errors->has('name')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <input id="surname" placeholder="Apellidos" type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input id="email" placeholder="Correo electrónico" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                      <input id="password"  placeholder="Contraseña" type="password" class="form-control" name="password" required>
                      <?php if($errors->has('password')): ?>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('password')); ?></strong>
                          </span>
                      <?php endif; ?>
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
      <?php echo $__env->make("partials.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</body>

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</html>
