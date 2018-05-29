<!doctype html>
<html lang="es">
<!--CABECERAS DE HTML  ...esta en la ruta views/partials/head-->
@include('partials.head')

<body>

	<div class="wrapper">
		<!--BARRA IZQUIERDA DE MENUS ......esta en la ruta views/partials/sidebar-->
		@include('partials.sidebar')

		<div class="main-panel">
			<!--BARRA SUPERIOR DE MENUS ......esta en la ruta views/partials/sidebar-->
			@include('partials.defaultbar')

			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-dark text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Silo seco A</p>
												<div id="nivel_seco_a">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-dark text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Silo seco B</p>
												<div id="nivel_seco_b">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-calendar"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-danger text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Silo nuevo (centrfugas)</p>
												<div id="silo_nuevo">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-timer"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-info text-center">
												<i class="ti-server"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Silo Almacenamiento</p>
												<div id="silo_almacen">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>




						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-warning text-center">
												<i class="ti-package"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Digestor</p>
												<div id="digestor">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-reload"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-success text-center">
												<i class="ti-truck"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Tolva recep(camion)</p>
												<div id="tolva_recepcion">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-calendar"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-muted text-center">
												<i class="ti-dashboard"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Gas</p>
												<div id="gas">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<i class="ti-timer"></i> Actualizado ahora
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-dark text-center">
												<i class="ti-stats-up"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Linea secado A</p>
												<div id="linea_a">

												</div>
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
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content">
									<div class="row">
										<div class="col-xs-5">
											<div class="icon-big icon-dark text-center">
												<i class="ti-stats-up"></i>
											</div>
										</div>
										<div class="col-xs-7">
											<div class="numbers">
												<p>Linea secado B</p>
												<div id="linea_b">

												</div>
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


							<div class="col-lg-4 col-sm-6">
								<div class="card card-circle-chart" data-background-color="blue">
									<div class="card-header text-center">
										<h5 class="card-title">Centrifuga A</h5>
										<p class="description">Estado</p>
									</div>
									<div class="card-content">
										<div id="centrifuga_a" class="chart-circle" data-percent="100"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card card-circle-chart" data-background-color="green">
									<div class="card-header text-center">
										<h5 class="card-title">Centrifuga B</h5>
										<p class="description">Estado</p>
									</div>
									<div class="card-content">
										<div id="centrifuga_b" class="chart-circle" data-percent="100"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card card-circle-chart" data-background-color="orange">
									<div class="card-header text-center">
										<h5 class="card-title">Centrifuga C</h5>
										<p class="description">Estado</p>
									</div>
									<div class="card-content">
										<div id="centrifuga_c" class="chart-circle" data-percent="100"></div>
									</div>
								</div>
							</div>


						</div>

					</div>
					<!--FIN PRIMERA FILA-->
					<!-- FIN CONSUMOS INSTANTANEOS-->


					<!--iNICIO FILA 2-->




				</div>


			</div>


			@include('partials.footer')



		</div>


</body>

@include('partials.scripts')


<!-- Scripts Charts-->







<script>
	$('#nav-dash').addClass('active');
</script>
<!-- Scripts Charts-->
<script src="{{ asset('js/scripts_home.js')}}"></script>




</html>
