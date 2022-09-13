<!DOCTYPE html>
<html>
<head>

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
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="../css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="../css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="../images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- owl stylesheets --> 
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/jquery-3.6.0.js"></script>
	<script src="../js/plugin.js"></script>
	<!-- sidebar -->
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/custom.js"></script>
	<!-- javascript --> 
	<script src="../js/owl.carousel.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<title>Articulo</title>
</head>
<body>
	<div id="mySidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="../">Inicio</a>
		<a href="../about.html">Acerca de nosotros</a>
		<a href="../productos/">Productos</a>
		<a href="../carrito/">Carrito</a>
		<a href="../contact.php">Contáctanos</a>
	</div>
	<div id="main">
		<!-- header section start -->
		<div class="header_section" style="background-color: rgba(0, 0, 0, 0.9);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">

					</div>
					<div class="col-sm-4">
						<div class="logo"><img src="../images/LOGO.png"></div>
					</div>
					<div class="col-sm-4" s>
						<div class="togle_3">
							<div class="left_main">
								<div class="menu_main">
									<div class="container"><div class="row"><div class="col-sm-12"></div></div></div>
								</div>
							</div>
							<div class="middle_main">
								<div class="shoping_bag"><a href="../carrito/"><img src="../images/shopping-bag.png"></a></div>
							</div>
							<div class="right_main">
								<div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="../images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="container"><br>
					<div class="card">
						<div class="card-header">
							<h3>Agregar producto</h3>
						</div>
						<div class="card-body">
							<form id="formulario" enctype="multipart/form-data">
								<div class="form-group">
									<input type="text" id="nombre" name="nombre" class="email-bt" placeholder="Nombre del artículo">
								</div>
								<div class="form-group">
									<input type="text" id="marca" name="marca" class="email-bt" placeholder="Marca">
								</div>
								<div class="form-group">
									<textarea class="email-bt" id="descripcion" name="descripcion" placeholder="Descripción..."></textarea>

								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-1"><h2>$</h2></div>
										<div class="col-sm-4"><input type="number" name="precio" class="email-bt" id="precio" placeholder="Precio"></div>
									</div>
								</div>

								<div class="form-group">
									<span>Imagen del artículo</span>
									<input type="file" class="email-bt" id="foto" name="foto">
									<div id="passstrength"></div>
								</div>

								<center><div class="g-recaptcha" data-sitekey="6LeJrzMgAAAAAArZWJV8RP2SVOrBD4D3MTRdsnbw"></div></center><br>
								<div id="respu"></div>
							</form>
							<center>
								<button class="btn btn-outline-primary" id="login" onclick="guardar()" type="submit">Login</button>
							</center>
							


							<br><br>
							<div style="text-align: right;">
								¿Ya tiene cuenta? <a href="../login/">Inicie Sesión</a>.
							</div>
							<script src="func.js" type="text/javascript"></script>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>

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