<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cashier</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap-4.3.1.css') ?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/custome-style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/table.css') ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
</head>

<body class="hero-anime">

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">

						<a class="navbar-brand" href="https://front.codes/" target="_blank">
							<img src="<?php echo base_url('asset/image/Hore-logo.png') ?>" alt="">
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#"></a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">

									<a class="nav-link " href="#">

										<h6>Chaidar Abimanyu</h6>

									</a>
									<p class="mr-5">Kopi kenangan Citayam</p>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link mt-2 ml-2" href="#">
										<img src="<?php echo base_url('asset/image/profile/profil_account.png') ?>" class="img-profile">
									</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#"><i class="fa-solid fa-bell nav-icon-custome"></i></a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#"><i class="fa-solid fa-arrow-right-from-bracket nav-icon-custome"></i></a>
								</li>
							</ul>
						</div>

					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="container-content">
		<?php $this->load->view($page) ?>
	</div>
</body>

</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
<!-- <script type="text/javascript" src="https://use.fontawesome.com/626d81f123.js"></script> -->
<!-- <script type="text/javascript" src="https://www.smoothemes.es/doc/superfish/superfish.js"></script>
<script type="text/javascript" src="https://www.smoothemes.es/doc/superfish/hoverIntent.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/stats.js/9/Stats.min.js"></script> -->


<script type="text/javascript" src="<?php echo base_url('asset/js/chart-custome.js') ?> "></script>