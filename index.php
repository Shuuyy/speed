<!DOCTYPE html>
<html lang="en">
<head>
   <!-- basic -->
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


      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      </head>
      <?php 
      session_start();

      ?>
      <!-- body -->
      <body>

         <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a href="./">Inicio</a>
          <a href="about.html">Acerca de nosotros</a>
          <a href="productos/">Productos</a>
          <a href="carrito/">Carrito</a>
          <a href="contact.php">Contáctanos</a>
       </div>
       <div id="main">
         <!-- header section start -->
         <div class="header_section" style="background-color: rgba(0, 0, 0, 0.9);">
          <div class="container-fluid">
            <div class="row"->
               <div class="col-sm-4">
                  <?php 
                  if (isset($_SESSION['id'])) {

                     if ($_SESSION['datos']['vendedor'] == 1){
                        ?>
                        <div class="togle_3">
                           <div class="left_main">
                              <div class="menu_main">
                                 <a href="subirproductos/"><i class="fa fa-fw fa-upload"></i>Publicar</a>
                              </div>
                           </div>
                           <div class="middle_main">
                              <div class="menu_main">
                                 <a href="editarrproductos"><i class="fa fa-fw fa-pencil-alt"></i>Editar</a>
                              </div>
                           </div>
                        </div>
                        
                        <?php 
                     }
                  }
                  ?>
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
                     <div class="middle_main" style="color: black;">
                        <div class="shoping_bag"><a href="carrito/"><img src="images/shopping-bag.png"></a></div>
                     </div>
                     <div class="right_main" style="color: black;">
                        <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner_section layout_padding" style="background-image: url('images/background.jpeg'); background-size: cover; background-attachment: fixed; color: black;">
            <div class="container">
               <section >
                  <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                        <li data-target="#main_slider" data-slide-to="1"></li>
                        
                     </ol>
                     <div class="carousel-inner">

                        <div class="carousel-item active">
                           <div class="container">
                              <div class="row marginii">
                                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="carousel-sporrt_text ">
                                       <h1 class="sport_text"><strong>Artículos<br><span style="color: #fff;">Deportivos</span></strong></h1>
                                       <p class="lorem_text" style="color: black; font-style: inherit; font-size: 25pt;"><b>Con nostros encuentra y compara todo tipo de artículos deportivos de diversas marcas</b></p>
                                       
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="img-box">
                                       <figure><img src="images/MaFeKa/imagen1.jpg" style="max-width: 100%;"/></figure>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="container">
                                 <div class="row marginii">
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="img-box">
                                       <figure><img src="images/online.png" style="max-width: 100%;"/></figure>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="carousel-sporrt_text ">
                                       <h1 class="sport_text"><strong>Compras<br><span style="color: #fff;">Online</span></strong></h1>
                                       <p class="lorem_text" style="color: black; font-style: inherit; font-size: 15pt;"><b>Realiza tus compras totalmente en linea sin necesitar presentarte en tiendas físicas</b></p>
                                    </div>
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

<div class="contact_section layout_padding" style="background-color: black; color: white;">
   <div class="container" style="color: white;">
      <?php if (isset($_SESSION['id'])) {}else{
         ?>
         <h1 class="contact_text" style="color: white;"><strong>Contáctanos</strong></h1>
      </div>
      <div class="contact_main">
         <div class="enput_section">
            <div class="email_box">
             <div class="input_main">
                <div class="container">


                  <form action="/action_page.php">
                    <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Nombre" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Número de Teléfono" name="Email">
                  </div>

                  <div class="form-group">
                   <textarea class="massage-bt" placeholder="Mensaje" rows="5" id="comment" name="Massage"></textarea>
                </div>
             </form>   
          </div> 
          <div class="send_btn">
            <button type="button" class="main_bt"><a href="#">Enviar</a></button>
         </div>                   

      </div>
   </div>
</div>
</div>
<?php } ?>
</div>
<!-- our section end -->
<!-- Testimonial section start -->


<!-- Testimonial section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <h2 class="important_text">Important Link</h2>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Our Latest Event</a></li>
                  <li><a href="#">Our Latest Article</a></li>
                  <li><a href="#">Join With Us</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-4">
            <h2 class="important_text">Social Link</h2>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Linkedin</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Youtube</a></li>
                  <li><a href="#">Pinterest</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-4">
            <h2 class="important_text">Subscribe With Us</h2>
            <p class="footer_lorem_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga</p>
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="text" aria-label="Recipient's username" aria-describedby=" basic-addon2">
               <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Subscribe</span>
               </div>
            </div>
         </div>
      </div>   
   </div>
</div>
<!-- footer section start -->
<!-- copyright section start -->
<div class="copyright_text">Copyright 2022 All Right Reserved By. <a href="http://www.icepopjs.com">IcepopJS.com</a></div>

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