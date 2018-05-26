
<!doctype html>
<html lang="es">
<!--CABECERAS DE HTML  ...esta en la ruta views/partials/head-->
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

	<div class="wrapper">
		<!--BARRA IZQUIERDA DE MENUS ......esta en la ruta views/partials/sidebar-->
		<?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="main-panel">
			<!--BARRA SUPERIOR DE MENUS ......esta en la ruta views/partials/sidebar-->
			<?php echo $__env->make('partials.defaultbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="blue">
								<div class="card-header text-center">
									<h5 class="card-title">Centrifugas</h5>
									<p class="description">Estado</p>
								</div>
								<div class="card-content">
									<div id="centrifuga" class="chart-circle" data-percent="70">70%</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="green">
								<div class="card-header text-center">
									<h5 class="card-title">Orders</h5>
									<p class="description">Completed</p>
								</div>
								<div class="card-content">
									<div id="chartOrders" class="chart-circle" data-percent="34">34%</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card card-circle-chart" data-background-color="orange">
								<div class="card-header text-center">
									<h5 class="card-title">New Visitors</h5>
									<p class="description">Out of total number</p>
								</div>
								<div class="card-content">
									<div id="chartNewVisitors" class="chart-circle" data-percent="62">62%</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Tiempo</h4>

								</div>
								<div class="card-content ">
									<iframe src="https://www.meteoblue.com/es/tiempo/widget/daily?geoloc=detect&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windgust=0&winddirection=0&uv=0&uv=1&humidity=0&precipitation=0&precipitationprobability=0&spot=0&pressure=0&layout=light"
									  frameborder="0" scrolling="NO" allowfullscreen allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 100%;height: 249px"></iframe>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-warning text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Capacity</p>
												105GB
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Updated now
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-success text-center">
												<i class="ti-wallet"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Revenue</p>
												$1,345
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-calendar"></i> Last day
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-danger text-center">
												<i class="ti-pulse"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Errors</p>
												23
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-timer"></i> In the last hour
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-info text-center">
												<i class="ti-twitter-alt"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Followers</p>
												+45
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Updated now
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-warning text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Capacity</p>
												105GB
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Updated now
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-success text-center">
												<i class="ti-wallet"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Revenue</p>
												$1,345
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-calendar"></i> Last day
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-danger text-center">
												<i class="ti-pulse"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Errors</p>
												23
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-timer"></i> In the last hour
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-info text-center">
												<i class="ti-twitter-alt"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Followers</p>
												+45
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Updated now
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--FIN PRIMERA FILA-->
					<!-- FIN CONSUMOS INSTANTANEOS-->


					<!--iNICIO FILA 2-->










					<div class="col-md-3 col-xs-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Tiempo</h4>

							</div>
							<div class="card-content ">
								<iframe src="https://www.meteoblue.com/es/tiempo/widget/daily?geoloc=detect&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windgust=0&winddirection=0&uv=0&uv=1&humidity=0&precipitation=0&precipitationprobability=0&spot=0&pressure=0&layout=light"
								  frameborder="0" scrolling="NO" allowfullscreen allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 100%;height: 249px"></iframe>
							</div>
						</div>
					</div>


				</div>


			</div>


			<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



		</div>


</body>

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Scripts Charts-->







<script>
	$('#nav-dash').addClass('active');




</script>
<!-- Scripts Charts-->
<script src="<?php echo e(asset('js/scripts_home.js')); ?>"></script>




</html>
