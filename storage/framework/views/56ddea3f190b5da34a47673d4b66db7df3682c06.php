
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
					<!--CONSUMOS INSTANTANEOS-->
					<div class="col-md-7 col-xs-12">

						<div class="col-md-4 col-xs-4">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-2">
											<div class="icon-medium icon-danger text-center">
												<i class="ti-bolt-alt"></i>
											</div>
										</div>
										<div class="col-xs-8">
											<div class="numbers">
												<p>Consumo</p>
												<span id="consumo"></span>
											</div>
										</div>
										<div class="col-xs-2">

										</div>
									</div>
								</div>
								<div class="card-footer">
								<div class="progress">
								<div id="progress-cons" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ></div>
									</div>
									<div class="stats">
										CARGA INVERSOR <span id="carga_inv"></span>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-4 col-xs-4">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-2">
											<div class="icon-medium icon-warning text-center">
												<i class="ti-shine"></i>
											</div>
										</div>
										<div class="col-xs-8">
											<div class="numbers-center">
												<p>Prod. Solar</p>
												<span id="prod_sol"></span>
											</div>
										</div>
										<div class="col-xs-2">

										</div>

									</div>
								</div>
								<div class="card-footer">

										<div class="stats">
											<i class="ti-reload"></i> Actualizado ahora
										</div>

								</div>
							</div>
						</div>



						<div class="col-md-4 col-xs-4">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-2">
											<div class="icon-medium icon-info text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-9">
											<div class="numbers">
												<p>Cap. Bateria</p>
												<span id="cap_battery"></span>
											</div>
										</div>
										<div class="col-xs-1">

										</div>

									</div>
								</div>
								<div class="card-footer">

										<div class="progress" >
											<div id="progress-bat" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="stats">
											<i class="ti-reload"></i> Actualizado ahora
										</div>

								</div>
							</div>
						</div>
					</div>


					<div class=" alarm-margin col-md-5 col-xs-12">


						<div class=" col-md-6">
							<div class="card">
								<div class="card-alarm card-alarm-stats">

									<div id="anomalia_fault_code_background" class="card-alarm-header" data-background-color="green">
										<i class="material-icons">info_outline</i>
									</div>
									<div class="card-alarm-content">
										<p class="category-alarm">Error Equipo</p>

									</div>
									<div class="card-alarm-footer">
										<div class="stats-alarm">
											<i class="material-icons text-success">warning</i>
											<a href="notificaciones" id="alarma_fault_code"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class=" col-md-6">
							<div class="card">
								<div class="card-alarm card-alarm-stats">
									<div id ="anomalia_robo_background" class="card-alarm-header" data-background-color="green">
										<i class="material-icons">store</i>
									</div>
									<div class="card-alarm-content">
										<p class="category-alarm">Seguridad Antirrobo</p>

									</div>
									<div class="card-alarm-footer">
										<div class="stats-alarm">
											<i class="material-icons text-success">warning</i>
											<a href="javascript:setAlarmaRobo()" id="alarma_robo"></a>


										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--FIN PRIMERA FILA-->
				<!-- FIN CONSUMOS INSTANTANEOS-->


				<!--iNICIO FILA 2-->








				<div class="col-md-6">


					<div class="card">
						<div class="card-header">
							<h4 class="title">Inverters</h4>
							<p class="category"id="work_mode"></p>
						</div>

						<div id="div1222042" style="">
							<div style="position:relative;margin:auto;width:400px;height:350px;">


								<a href="">
									<div id="placas" style="position:absolute;top:10px;left:150px; background:url(assets/img/inverter/placas_off.png) no-repeat;background-size:100%;width:100px;height:140px;">
										<div class="buble" id="buble_placas" ></div>
									</div>
								</a>
								<div id="placas_to_red" style="position:absolute;top:70px;left:65px; background:url(assets/img/inverter/placas_to_red_off.gif) no-repeat;background-size:100%;width:80px;height:200px;"></div>
								<div id="placas_to_batt" style="position:absolute;top:70px;left:255px; background:url(assets/img/inverter/placas_to_batt_off.gif) no-repeat;background-size:100%;width:80px;height:200px;"></div>

								<div id="placas_to_home" style="position:absolute;top:118px;left:195px; background:url(assets/img/inverter/placas_to_home_off.gif) no-repeat;background-size:100%;width:10px;height:60px;"></div>

								<div id="home" style="position:absolute;top:145px;left:150px; background:url(assets/img/inverter/home_off.png) no-repeat;background-size:100%;width:100px;height:140px;">
									<div class="buble_centro"id="buble_casa"></div>
								</div>

								<a href="">
									<div id="red" style="position:absolute;top:195px;left:25px; background:url(assets/img/inverter/red_off.png) no-repeat;background-size:100%;width:100px;height:140px;">
										<div class="buble_centro" id="buble_red"></div>
									</div>
								</a>
								<a href="">
									<div id="bateria" style="position:absolute;top:195px;left:273px; background:url(assets/img/inverter/battery_off.png) no-repeat;background-size:100%;width:100px;height:140px;">
										<div style="display: inline-block; width: auto; top:-20px;text-align: justify;">
											
											<div class="buble_bat_descarga"id="buble_batt_carga_descarga"  style="float:right;"></div>
										</div>
									</div>
								</a>
								<div id="red_to_home" style="position:absolute;top:200px;left:120px; background:url(assets/img/inverter/red_to_home_off.gif) no-repeat;background-size:100%;width:27px;height:60px;"></div>
								<div id="batt_to_home" style="position:absolute;top:200px;left:250px; background:url(assets/img/inverter/batt_to_home_off.gif) no-repeat;background-size:100%;width:27px;height:60px;"></div>
								<div id="red_to_batt" style="position:absolute;top:285px;left:110px; background:url(assets/img/inverter/red_to_batt_off.gif) no-repeat;background-size:100%;width:180px;height:60px;"></div>

							</div>

						</div>

					</div>


				</div>

				<div class="col-md-6" id="totales">
					<div class="container-fluid">

						<div class="col-md-4 col-xs-4">
							<div class="card card-timeline card-plain">
								<div class="card-content">
									<ul class="timeline timeline-simple">

										<li class="timeline-inverted">
											<div class="timeline-badge success">
												<i class="ti-calendar"></i>
											</div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<span class="label label-success">kWh diarios</span>
												</div>
												<div class="timeline-body">
													<p id="kw_diario"></p>
												</div>
											</div>
										</li>

									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-xs-4">
							<div class="card card-timeline card-plain">
								<div class="card-content">
									<ul class="timeline timeline-simple">

										<li class="timeline-inverted">
											<div class="timeline-badge info">
												<i class="ti-calendar"></i>
											</div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<span class="label label-info">kWh mensuales</span>
												</div>
												<div class="timeline-body">
													<p id="kw_mensual"></p>
												</div>
											</div>
										</li>

									</ul>
								</div>
							</div>

						</div>
						<div class="col-md-4 col-xs-4">
							<div class="card card-timeline card-plain">
								<div class="card-content">
									<ul class="timeline timeline-simple">

										<li class="timeline-inverted">
											<div class="timeline-badge warning">
												<i class="ti-calendar"></i>
											</div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<span class="label label-warning">kWh anuales</span>
												</div>
												<div class="timeline-body">
													<p id="kw_anual"></p>
												</div>
											</div>
										</li>

									</ul>
								</div>
							</div>

						</div>

					</div>


				</div>











<?php if(env('APP_ENV')=='production'): ?>
				<div class=" col-md-3 col-xs-6">
<?php endif; ?>
<?php if(env('APP_ENV')=='local'): ?>
				<div class=" col-md-6 col-xs-12">
<?php endif; ?>
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Balance energético</h4>

						</div>
						<div class="card-content table-responsive table-full-width">
							<table class="table table-hover">

								<tbody>
									<tr class="success">

										<td>Energía consumo hoy</td>
										<td id="cons_hoy">kWh</td>

									</tr>
									<tr class="">

										<td>Energia generada hoy</td>
										<td id="gen_hoy">kWh</td>

									</tr>
									<tr class="success">

										<td>Balance energético hoy</td>
										<td id="bal_hoy">kWh</td>

									</tr>
									<tr>

										<td>Balance energético ayer</td>
										<td id="bal_yest">kWh</td>

									</tr>
									<tr class="success">

										<td>Balance energético dos dias</td>
										<td id="bal_two_day">kWh</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php if(env('APP_ENV')=='production'): ?>

				<div class="col-md-3 col-xs-6">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Tiempo</h4>

						</div>
						<div class="card-content ">
<iframe src="https://www.meteoblue.com/es/tiempo/widget/daily?geoloc=detect&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windgust=0&winddirection=0&uv=0&uv=1&humidity=0&precipitation=0&precipitationprobability=0&spot=0&pressure=0&layout=light"  frameborder="0" scrolling="NO" allowfullscreen allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 100%;height: 249px"></iframe>
</div>
</div>
</div>
<?php endif; ?>
				</div>

















				<div class="col-md-12">

					<div class="card">
						<div class="card-header">
							<div class="col-md-6">
								<h4 class="title">Potencia</h4>
								<p class="category">24 horas</p>

							</div>



							<div class="col-md-6">

								<div class="time_query">
									<a  href="javascript:setReportDate(-1)"><i class="ti-angle-double-left"></i></a>
									<input type="text" class="form-control" data-date-format="dd-MM-yyyy" value="" id="reportDate" onchange="reloadReport()">
									<a  href="javascript:setReportDate(1)"><i class="ti-angle-double-right"></i></a>

								</div>
							</div>

						</div>


						<div class="content">

							<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
							<div class="card-footer">

								<hr>
								<div class="stats">
									<i class="ti-reload"></i> Actualizado Hace 1 minuto
								</div>
							</div>
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

<script>
$('#options').on('change', function (e) {
		$('.option').hide();
		$('#option-' + e.target.value).show();
});
</script>




</html>
