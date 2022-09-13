<!DOCTYPE html>
<html>
<head>
	<?php 
	//iniciamos la sesion yverificamos que exista una sesión iniciada, de lo contrario se redirigirá al inicio
	session_start();
	if (isset($_SESSION['id'])) {
		include '../clases/class.carrito.php';
	}else{
		?>
		<script type="text/javascript">
			window.location="../";
		</script>
		<?php 
	}
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>Speed</title>
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
	
	<style>

		.prod:hover {
			transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
		}
	</style>

	<title>Carrito</title>
</head>
<body>
	<div id="mySidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<a href="../">Inicio</a>
		<a href="../about.html">Acerca de nosotros</a>
		<a href="../productos/">Productos</a>
		<a href="../carrito/">Carrito</a>
		<a href="../contact.html">Contáctanos</a>
	</div>
	<div id="main">
		<!-- header section start -->
		<div class="header_section" style="background-color: rgba(0, 0, 0, 0.9);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">

					</div>
					<div class="col-sm-4">
						<div class="logo"><img src="../images/MaFeKa/LOGO.png"></div>
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

					<?php 
					$total = 0;
					$carrito = new carrito($_SESSION['id'], '');
					$lista = $carrito->mostrar();
					foreach ($lista as $articulo) {
						$idusuario = $_SESSION['id'];
						$idarticulo = $articulo['id'];
						$total = $total + $articulo['precio'];
						?>
						<div class="card">
							<div class="prod">
								<script type="text/javascript" src="carrito.js"></script>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-3">
											<img src="../<?php echo $articulo['imagen']; ?>">
										</div>
										<div class="col-sm-7">
											<h3><?php echo $articulo['nombre']; ?></h3>
											<p><?php echo $articulo['descripcion']; ?></p>
											<h4><?php echo $articulo['marca']; ?></h4>

										</div>
										<div class="col-sm-2">
											<form method="post" action="compras.php">
												<input type="text" name="usu" value="<?php echo $_SESSION['id']; ?>" style="display: none;">
												<input type="text" name="idpr" value="<?php echo $articulo['id']; ?>" style="display: none;">
												<input type="text" name="accion" value="eliminar" style="display: none;">
												<button class="btn btn-danger" type="submit">Eliminar</button>
											</form><br><br><br>
											<div style="text-align: right; margin-bottom: 0;">$ <?php echo $articulo['precio'] ?></div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<?php 
					} 
					if ($total == 0) {
						?>
						<center>
							<div style="color: red;">Por ahora no tienes nada en el carrito. <a href="../productos/">Comience a comprar</a></div>
						</center>
						<?php 
					}
					?>
					
					<center>
						<form method="post" action="compras.php">
							<input type="text" name="usu" value="<?php echo $_SESSION['id']; ?>" style="display: none;">
							<input type="text" name="accion" value="vaciar" style="display: none;">
							<input type="submit" class="btn btn-success" value="Comprar">
						</form>
					</center>
				</div> 
			</div>
			
		</div>
	</div>
	<div style="text-align: right;" class="container"><h4>Total: $<?php echo $total; ?></h4></div>
	
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