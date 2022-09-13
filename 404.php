<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- owl stylesheets --> 
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<?php session_start(); ?>
	<title>Page not found</title>
</head>
<body>
	<div id="mySidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="./">Inicio</a>
		<a href="about.html">Acerca de nosotros</a>
		<a href="productos/">Productos</a>
		<a href="carrito/">Carrito</a>
		<a href="contact.html">Contáctanos</a>
	</div>
	<div id="main">
		<!-- header section start -->
		<div class="header_section" style="background-color: rgba(0, 0, 0, 0.9);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">

					</div>
					<div class="col-sm-4">
						<div class="logo"><img src="images/MaFeKa/LOGO.png"></div>
					</div>
					<div class="col-sm-4">
						<div class="togle_3">
							<div class="left_main">
								<div class="menu_main">
									<?php 
										if (isset($_SESSION['id'])) {
											echo $_SESSION['datos']['nombre'] . " " . $_SESSION['datos']['apellidos'];
										?>
										<a href="login/logout.php"><i class="fa fa-fw fa-user"></i> Cerrar sesión</a>
										<?php 
										}
										else{
										?>
										<a href="login/"><i class="fa fa-fw fa-user"></i> Login</a>
										<?php 
										} 
									?>
								</div>
							</div>
							<div class="middle_main">
								<div class="shoping_bag"><a href="carrito/"><img src="images/shopping-bag.png"></a></div>
							</div>
							<div class="right_main">
								<div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="banner_section layout_padding" style="background-image: url('images/store.jpg'); background-size: cover; background-attachment: fixed;">

				<div class="container">
					<section >
					<div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#main_slider" data-slide-to="0" class="active"></li>
							</ol>
							<center>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="container">
										<div class="row marginii">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
												<div class="carousel-sporrt_text ">
													<h1 class="sport_text"><strong>ERROR 404<br><span style="color: #fff;">NO SE HA ENCONTRADO LA PÁGINA</span></strong></h1>
													<p class="lorem_text">No se ha encontrado la página</p>
													</center>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	
	<!-- footer section start -->
	<!-- copyright section start -->
	<div class="copyright_text">Copyright 2022 All Right Reserved By. <a href="http://www.icepopjs.com">IcepopjJS.com</a></div>

</div>

<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript --> 
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
	$(document).ready(function(){
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});
		$('#myCarousel').carousel({
			interval: false
		});
	</script>

	<script>
		function openNav() {
			document.getElementById("mySidebar").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
		}
	</script>

</body>
</html>