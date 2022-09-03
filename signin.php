<!DOCTYPE html>
<html lang="es">
<head>
<title>Sportswearline - Ingresar</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<!--libreria iconos redes sociales-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<!--<a class="btn_audio" onclick="sound.play()"> <img src="images/n.12.jpg" class="voci" alt="sonido" title="Asistente de discapacidad visual"></a> -->
			<div class="container">				
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p><strong> <a href="#" style = "color: #B2051F">SPORTS</a>WEARLINE</strong>|<a href="register.php"><strong>Registrarse</strong> </a></p>
				</div>
				<div class="redes-container">
					<ul>
						<li><a href="https://www.facebook.com/Sportswearline-103380179122013" target="_blank" class="facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com/sportswearline_/?hl=es"  target="_blank" class="instagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://twitter.com/sportwearline" target="_blank" class="twitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://co.pinterest.com/sportwearline/" target="_blank" class="pinterest" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li> 
					</ul>
					</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="https://wa.link/hzuccw" target="_blank" style="border-radius:5%"><strong>Escríbenos por WhatsApp</strong></a></li>		
					</ul>
					<ul>
				<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:sportwearline@gmail.com"><strong>Sports wearline</strong></a></li>	
						</ul>
				
					</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<center><h1><a href="index1.php" style="color: #B2051F">SPORTS<b>WEARLINE</b><span class="tag"><strong> Vístete bien, hoy tienes una cita con el deporte ¡Marca tú estilo!</strong></span></a></h1></center>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Iniciar<span>Sesion </span></h3>
			<p>Si ya tienes una cuenta puedes ingresar aquí mismo. </p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4><span id="signo">¡</span><b>Bienvenido a SportsWearLine</b><span id="signo">!</span> <br> <span id="signo">¿</span><b>No eres usuario</b><span id="signo">?</span> <a href="register.php"> Registrate Ahora</a> </h4>
			</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
				
	<?php
        if (isset($_REQUEST['login'])) {
          session_start();
          $email = $_REQUEST['email'] ?? '';
          $passwordd = $_REQUEST['password'] ?? '';

          include_once "Basedata.php";

          $con = mysqli_connect($host, $user, $pasword, $db);

          $query = "SELECT Id, email, nombre  from clientes where email= '" . $email . "'  and password= '" . $passwordd . "' ";

          $res = mysqli_query($con, $query);
          //  $paswordd = md5 ($passwordd);   Metodo opcional contraseña encriptada para evitar hackeos.
          $row = mysqli_fetch_assoc($res);
          if ($row) {
            $_SESSION['IdCliente'] = $row['Id'];
            $_SESSION['emailCliente'] = $row['email'];
            $_SESSION['nombreCliente'] = $row['nombre'];
            header("location: Index.php?mensaje=Usuario Registradro exitosamente");
          } else {
        ?>
            <div class="alert alert-danger" role="alert"></div>
            <strong>ERROR</strong>
        <?php
          }
        }
        ?>
				
				<form method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="pasword" name="pasword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="login">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
			</div>
		</div>
	</div>
	<!--//login-->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--<script type="text/javascript">
			var sound = new Audio();
			sound.src = "../images/Audio/Ingresar.mp3"
		</script> -->
	<!--search jQuery-->
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
