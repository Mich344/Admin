
<!DOCTYPE html>
<html lang="es">

<head>
  <title>SportsWearLine</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script src="./application/x-javascript">
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
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <!--//Custom Theme files -->
  <!--js-->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <!--//js-->
  <!--cart-->
  <script src="js/simpleCart.min.js"></script>
  <!--cart-->
  <!--Libreria iconos rrss-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--web-fonts-->
  <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
  <!--web-fonts-->
  <!--animation-effect-->
  <link href="css/animate.min.css" rel="stylesheet">
  <script src="js/wow.min.js"></script>
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
<?php
  if (isset($_REQUEST['accion']) && $_REQUEST['accion'] == "cerrar") {
    session_start();
    session_destroy();
    $_REQUEST=[];
    header("location: index1.php");
  }
  ?>

  <?php
  include_once "Basedata.php";
  $con = mysqli_connect($host, $user, $pasword, $db)
  ?>
  <?php
  include_once "menu.php";
  ?>
  <!--header-->
  <div class="header">

    <div class="header-two navbar navbar-default">
      <!--header-two-->
      <div class="container">
        <?php
        $modulo = $_REQUEST['modulo'] ?? '';
        if ($modulo == "index1" || $modulo == "") {
          include_once "index1.php";
        }
        if ($modulo == "register") {
          include_once "register.php";
        }
        if ($modulo == "signin") {
          include_once "signin.php";
        }

        ?>
        <div class="nav navbar-nav header-two-left">
          <ul>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="https://wa.link/hzuccw" target="_blank" style="border-radius:5%"><strong>Escríbenos por WhatsApp</strong></a></li>
          </ul>
          <ul>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:sportwearline@gmail.com"><strong>Sports wearline</strong></a></li>
          </ul>

        </div>
        <div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
          <h1><a href="index1.php" style="color: #B2051F">SPORTS<b>WEARLINE</b><span class="tag"><strong> Vístete bien, hoy tienes una cita con el deporte ¡Marca tú estilo!</strong></span></a></h1>
        </div>

        <div class="nav navbar-nav navbar-right header-two-right">
          <div class="header-right my-account">
            <a href="contact.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><strong>CONTÁCTANOS</strong></a>

          </div>
          <div class="header-right cart">
            <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
            <h4><a href="checkout.php">
                <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
              </a></h4>
            <div class="cart-box">
              <p><a href="javascript:;" class="simpleCart_empty">Vaciar</a></p>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="top-nav navbar navbar-default">
      <!--header-three-->
      <div class="container">
        <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!--navbar-header-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav top-nav-info">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mujer<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column multi-column1">
                  <div class="row">
                    <div class="col-sm-4 menu-grids menulist1">
                      <h4>PRENDAS SUPERIORES</h4>
                      <ul class="multi-column-dropdown ">
                        <li><a class="list" href="mujer/camisamlarga.php"><b>Manga larga</b></a></li>
                        <li><a class="list" href="mujer/camisamcorta.php"><b>Manga corta</b></a></li>
                        <li><a class="list" href="mujer/sinmanga.php"><b>Sin mangas</b></a></li>

                      </ul>
                    </div>
                    <div class="col-sm-2 menu-grids">
                      <h4>PRENDAS INFERIORES</h4>
                      <ul class="multi-column-dropdown">
                        <li><a class="list" href="mujer/pantalonesm.php"><b>Pantalones</b></a></li>
                        <li><a class="list" href="mujer/shorts.php"><b>Shorts</b></a></li>
                      </ul>
                    </div>

                    <div class="col-sm-3 menu-grids">
                      <ul class="multi-column-dropdown">
                      </ul>
                    </div>
                    <div class="col-sm-3 menu-grids">
                      <div class="ok">

                      </div>

                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </ul>
              </li>
              <li class="dropdown grid">
                <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Hombre<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column multi-column2">
                  <div class="row">
                    <div class="col-sm-3 menu-grids">
                      <h4>PRENDAS SUPERIORES</h4>
                      <ul class="multi-column-dropdown">
                        <li><a class="list" href="hombre/camisamg.php"><b>Manga larga</b></a></li>
                        <li><a class="list" href="hombre/camisamc.php"><b>Manga corta</b></a></li>
                        <li><a class="list" href="hombre/camisasm.php"><b>Sin mangas</b></a></li>

                      </ul>
                    </div>
                    <div class="col-sm-3 menu-grids">
                      <h4>PRENDAS INFERIORES</h4>
                      <ul class="multi-column-dropdown">
                        <li><a class="list" href="hombre/sudadera.php"><b>Pantalones</b></a></li>
                        <li><a class="list" href="hombre/bermuda.php"><b>Bermudas</b></a></li>
                      </ul>
                    </div>
                    <div class="col-sm-3 menu-grids">
                      <ul class="multi-column-dropdown">
                      </ul>
                    </div>
                    <div class="col-sm-3 menu-grids new-add2">

                      <div class="lll">
                      </div>
                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </ul>
              </li>
              <li class="dropdown grid">
                <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Zapatillas<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column menu-two multi-column3">
                  <div class="row">
                    <div class="col-sm-4 menu-grids">
                      <ul class="multi-column-dropdown">
                        <h4>Zapatillas</h4>
                        <li><a class="list" href="zapatillas/zapatillaspc.php"><b>Correr</b></a></li>
                        <li><a class="list" href="zapatillas/zapatillassd.php"><b>Senderismo</b></a></li>

                      </ul>
                    </div>
                    <div class="col-sm-8 menu-grids">

                      <div class="imag">

                      </div>

                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </ul>
              </li>
              <li class="dropdown grid">
                <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Productos<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column menu-two multi-column3">
                  <div class="row">
                    <div class="col-sm-4 menu-grids">
                      <ul class="multi-column-dropdown">
                        <h4>Accesorios</h4>

                        <li><a class="list" href="productos/cuerdas.php"><b>Cuerdas</b></a></li>
                        <li><a class="list" href="productos/mancuernas.php"><b>Mancuernas</b></a></li>
                        <li><a class="list" href="productos/botellas.php"><b>Botellas</b></a></li>
                        <li><a class="list" href="productos/guantes.php"><b>Guantes</b></a></li>
                      </ul>
                    </div>
                    <div class="col-sm-8 menu-grids">

                      <div class="new-add">

                      </div>

                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </ul>
              </li>
            </ul>
            <div class="clearfix"> </div>
            <!--//navbar-collapse-->

            <!--//navbar-header-->
        </nav>
        <div id="cd-search" class="cd-search">
          <form>
            <input type="search" placeholder="Buscar...">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--//header-->
  <!--banner-->

  <div class="banner">
    <div class="container">
      <div class="banner-text">
        <div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">
          <h2>LO MÁS GRANDE DE LA MODA</h2>
          <h3>PRÓXIMAMENTE! </h3>
          <h4>¡NUESTROS NUEVOS DISEÑOS!</h4>
          <div class="count main-row">
            <ul id="example">
              <li><span class="hours">00</span>
                <p class="hours_text">Horas</p>
              </li>
              <li><span class="minutes">00</span>
                <p class="minutes_text">Minutos</p>
              </li>
              <li><span class="seconds">00</span>
                <p class="seconds_text">Segundos</p>
              </li>
            </ul>
            <div class="clearfix"> </div>
            <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
            <script type="text/javascript">
              $('#example').countdown({
                date: '12/24/2020 15:59:59',
                offset: -8,
                day: 'Day',
                days: 'Days'
              });
            </script>
          </div>
        </div>
        <!--FlexSlider-->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
          $(window).load(function() {
            $('.flexslider').flexslider({
              animation: "pagination",
              start: function(slider) {
                $('body').removeClass('loading');
              }
            });
          });
        </script>
        <!--End-slider-script-->
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!--//banner-->

  <!--new-->
  <?php
  include_once "Mproductos.php"
  ?>
  <!--//new-->
   <class="gallery-info">

        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--//gallery-->

  <!--footer-->
  <div class="footer" style="background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%)">
    <div class="container">
      <div class="footer-info">
        <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
          <h4 class="footer-logo"><a href="index1.php" style="color: #B2051F">SPORTS <b style="color: white">WEARLINE</b> <span class="tag"> </span> </a></h4>
          <p style="color: white"><strong>© SPORTSWEARLINE. Vístete bien, hoy tienes una cita con el deporte ¡Marca tú estilo!</strong></p>
        </div>
        <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
          <h3 style="color: #B2051F;"><strong>Popular</strong></h3>
          <ul>
            <li><a href="about.php" style="color: white"><strong>Acerca de Nosotros</strong></a></li>

            <li><a href="contact.php" style="color: white;"><strong>Contáctanos</strong></a></li>
            <li><a href="faq.php" style="color: white"><strong>Preguntas Frecuentes</strong></a></li>

          </ul>
        </div>
        <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
          <h2 style="color:#B2051F"><strong>Disfruta comprando tus productos favoritos </strong></h2>
          <p style="color:white;"><strong>Dejanos tu sugerencia en un comentario</stron>
          </p>
          <form>
            <input type="text" placeholder="Escribenos tu opinion aqui" required="">
            <input style="color:black" type="submit" value="Enviar">
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--//footer-->
  <!--search jQuery-->
  <script src="js/main.js"></script>
  <script type="text/javascript">
    var sound = new Audio();
    sound.src = "../images/Audio/AudioAcces.mp3"
  </script>
  <script src="js/app.js"></script>
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
