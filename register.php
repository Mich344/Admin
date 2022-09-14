<!DOCTYPE html>
<html lang="es">

<head>
  <title>Sportswearline - Registro</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
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
  <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!--//end-smooth-scrolling-->
</head>

<body>
  <!--header-->
  <div class="header">
    <!--header-one-->
    <!--<a class="btn_audio" onclick="sound.play()"> <img src="images/n.12.jpg" class="voci" alt="sonido" title="Asistente de discapacidad visual"></a> -->
    <!--header-two-->
  </div>
  <!--//breadcrumbs-->
  <!--login-->
  <div class="login-page">
    <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
      <h3 class="title">Registrar<span>Sesion </span></h3>
      <p>Si ya tienes una cuenta puedes ingresar aquí mismo. </p>
    </div>
    <div class="widget-shadow">
      <div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
        <h4><span id="signo">¡</span><b>Bienvenido a SportsWearLine</b><span id="signo">!</span> <br> <span id="signo">¿</span><b>Ya eres miebro</b><span id="signo">?</span> <a href="signin.php"> Ingresa ahora</a> </h4>
      </div>
      <div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
        <?php
        if (isset($_REQUEST['registro'])) {
          session_start();
          $nombre = $_REQUEST['nombre'] ?? '';
          $apellido = $_REQUEST['apellido'] ?? '';
          $email = $_REQUEST['email'] ?? '';
          $paswordd = $_REQUEST['pasword'] ?? '';
          $ciudad = $_REQUEST['ciudad'] ?? '';
          $telefono = $_REQUEST['telefono'] ?? '';
          //$telefono = $_REQUEST['telefono'] ?? '';

          include_once "Basedata.php";
          $con = mysqli_connect($host, $user, $pasword, $db);
          $query = "INSERT into clientes(nombre,apellido,email,pasword,ciudad,telefono) values ('$nombre', '$apellido', '$email', '$paswordd', '$ciudad', '$telefono')";
          $res = mysqli_query($con, $query);
          //  $paswordd = md5 ($passwordd);   Metodo opcional contraseña encriptada para evitar hackeos.
          if ($res) {
        ?>
            <div class="alert alert-registro exitoso" role="alert">
              <strong>registro exitoso</strong> <a href="signin.php">ir a login </a>
            </div>
          <?php
          } else {
          ?>
            <div class="alert alert-danger" role="alert"></div>
            <strong>Error de registro </strong>
        <?php
          }
        }
        ?>
        <div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
          <form method="POST">
            <div class="">
              <input  style="height:41px;" class="form-control" type="text" class="user" name="nombre" placeholder="Nombre" required="">
            </div>
            <div>
              <input  style="height:41px;" class="form-control" type="text" name="apellido" placeholder="Apellido" required="">
            </div>
            <div>
              <input  style="height:41px;" class="form-control" type="text" name="email" placeholder="Email" required="">
            </div>
            <div>
              <input  style="height:41px;"  class="form-control" type="password" name="pasword" class="lock" placeholder="Password" required="">
            </div>
            <div>
              <input  style="height:41px;" class="form-control" type="text" name="ciudad" placeholder="Ciudad" required="">
            </div>
            <div>
              <input  style="height:41px;" class="form-control" type="tel" name="telefono" placeholder="Telefono" required="">
            </div>
            <div>
            <!-- <input type="date" value="  echo date('Y-m-d', strtotime($valor['fecha'])) ?>"> -->
            </div>
            <input type="submit" name="registro" value="Ingresar">
            <br>
            <br>
            <div>
              <a class="nav-link" href="index1.php " title="Regresar inicio">
                <i class="fa fa-backward" aria-hidden="true" style="color:black;"></i></a>
            </div>
          </form>
        </div>
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

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <!--//smooth-scrolling-of-move-up-->
  <!--Bootstrap core JavaScript
    ================================================== -->
  <!--Placed at the end of the document so the pages load faster -->
  <script src="js/bootstrap.js"></script>
</body>

</html>
