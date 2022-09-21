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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-color: black;">
<div id="particles-js"></div>
<style>
    #particles-js{
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: -1;
    }
    #login-box{
      position:relative;
      z-index:99;
    }
    #card{
      border-right: 3px solid red;
}
    
</style>
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
        if (isset($_REQUEST['login'])) {
          session_start();
          $email = $_REQUEST['email'] ?? '';
          $passwordd = $_REQUEST['pasword'] ?? '';

          include_once "Basedata.php";

          $con = mysqli_connect($host, $user, $pasword, $db);

          $query = "SELECT Id, Email, Nombre  from usuario where email= '" . $email . "'  and pasword= '" . $passwordd . "' ";

          $res = mysqli_query($con, $query);
          //  $paswordd = md5 ($passwordd);   Metodo opcional contraseña encriptada para evitar hackeos.
          $row = mysqli_fetch_assoc($res);
          if ($row) {
            $_SESSION['Id'] = $row['Id'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Nombre'] = $row['Nombre'];
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
            <input type="email" class="form-control" placeholder="Correo" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" name="pasword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- ingresar comienzo -->
            <input type="submit" class="btn btn-secondary btn-lg btn-block btn btn-dark" name="login" value="Ingresar">
      </form>               
    </div>
    <center><button type="button" class="btn btn-outline-info"><b>Contacta con un administrador</b></button></center>
  </div>
<!-- Button trigger modal -->
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="js/particles.js"></script>
<script src="js/particulas.js"></script>
<style>

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

h1{
    color:#60a0ff;
}

*:focus {
    outline: none;
} 

#icon {
  width:30%;
}
</style>
</body>

</html>
