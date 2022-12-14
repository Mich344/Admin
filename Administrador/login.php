<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="Css/Particles.css">
</head>

<body class="hold-transition login-page" style="background-color: black;">
<div id="particles-js"></div>
  <div class="login-box">
    <div class="login-logo">
      <p><strong><a style="color: red"> <b>Sports</b></a><b style ="color:white;">Wearline</b></strong>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <center><b style="color:black">BIENVENIDOS</b></center>
        <p class="login-box-msg"><b>Ingresar sesion</b></p>

        <?php
        if (isset($_REQUEST['Ingresar'])) {
          session_start();
          $email = $_REQUEST['emailadmin'] ?? '';
          $passwordd = $_REQUEST['paswordadmin'] ?? '';
          $salt = "asdasdasddacaca";
          $pasword = $_POST['paswordadmin'].$salt;
          $pasword = sha1($_POST['paswordadmin']);

          include_once "Basedata.php";

          $con = mysqli_connect($host, $user, $pasword, $db);

          $query = "SELECT Idadmin, emailadmin, nombreadmin  from administradores where emailadmin= '" . $email . "'  and paswordadmin= '" . $passwordd . "' ";

          $res = mysqli_query($con, $query);
          //  $paswordd = md5 ($passwordd);   Metodo opcional contrase??a encriptada para evitar hackeos.
          $row = mysqli_fetch_assoc($res);
          if ($row) {
            $_SESSION['Idadmin'] = $row['Idadmin'];
            $_SESSION['emailadmin'] = $row['emailadmin'];
            $_SESSION['nombreadmin'] = $row['nombreadmin'];
            header("location: Panel.php");
          } else {
        ?>
            <center><div class="alert alert-danger" role="alert">USUARIO NO REGISTRADO</div></center>
            
        <?php
          }
        }
        ?>
       <form method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Correo" name="emailadmin">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contrase??a" name="paswordadmin">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- ingresar comienzo -->
            <input type="submit" class="btn btn-secondary btn-lg btn-block btn btn-dark" name="Ingresar" value="Ingresar">
      </form>               
    </div>
    <center><button type="button" class="btn btn-outline-info"><b>Contacta con un administrador</b></button></center>
  </div>
<!-- Button trigger modal -->
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="Js/particles.js"></script>
<script src="Js/particulas.js"></script>
</body>

</html>
