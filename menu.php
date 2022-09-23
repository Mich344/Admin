<div class="container">
  <?php 
  session_start();
  //var_dump($_SESSION);
  ?>
  <div class="redes-container">
    <ul class="navbar-nav ml-auto">
      <ul>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            
            <?php
            include_once "Basedata.php";
            //isset para verificar 
            if (isset($_SESSION['IdCliente'])) {
            ?>
              <a href="index1.php?modulo=usuario" class="dropdown-item">
                <i class="fas fa-user text-primary mr-2"></i> Bienvenido <?php echo $_SESSION['nombreCliente'] ?>
              </a>
              <form action="index1.php?accion=cerrar" method="post">
                <button name="accion" class="btn btn-danger dropdown-item mr-2" type="submit" value="cerrar">
                  <i class="fa fa-power-off"></i>Cerrar sesion
                </button>
              </form>
            <?php
            } else {
            ?>
              <div class="dropdown-divider"></div>
            <a href="signin.php" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> Ingresar
            </a>
            <div class="dropdown-divider"></div>
            <a href="register.php" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> Registrarse
            </a>
            <?php
            }
            ?>
        </li>
        </a> </li>
        <li><a href="https://www.facebook.com/Sportswearline-103380179122013" target="_blank" class="facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/sportswearline_/?hl=es" target="_blank" class="instagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/sportwearline" target="_blank" class="twitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://co.pinterest.com/sportwearline/" target="_blank" class="pinterest" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
      </ul>
  </div>
  <div class="clearfix"> </div>
</div>
<?php
$mensaje = $_REQUEST['mensaje'] ?? '';
if ($mensaje) {
?>
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <?php echo $mensaje; ?>
  </div>
<?php
}
?>
<hr>

