<?php
if (isset($_REQUEST['guardar'])) {
  include_once "Basedata.php";
  // Llamar la base de datos desde el include_once.
  $con = mysqli_connect($host, $user, $pasword, $db);

  $email = mysqli_real_escape_string($con, $_REQUEST['email'] ?? '');
  $pasword = mysqli_real_escape_string($con, $_REQUEST['pasword'] ?? '');
  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombre'] ?? '');
  $apellido = mysqli_real_escape_string($con, $_REQUEST['apellido'] ?? '');
  $ciudad = mysqli_real_escape_string($con, $_REQUEST['ciudad'] ?? '');
  $telefono = mysqli_real_escape_string($con, $_REQUEST['telefono'] ?? '');
  $tip_doc = mysqli_real_escape_string($con, $_REQUEST['tip_doc'] ?? '');
  $num_doc = mysqli_real_escape_string($con, $_REQUEST['num_doc'] ?? '');
  $fech_nac = mysqli_real_escape_string($con, $_REQUEST['fech_nac'] ?? '');

  $query = "INSERT INTO usuario (email,pasword,nombre,apellido,ciudad,telefono,tip_doc,num_doc,fech_nac) VALUES ('" . $email . "' , '" . $pasword . "' , '" . $nombre . "' , '" . $apellido . "'
  , '" . $ciudad . "' , '" . $telefono . "' , '" . $tip_doc . "', '" . $num_doc . "' , '" . $fech_nac . "'); ";
  //Restultados 

  $res = mysqli_query($con, $query);
  if ($res) {
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Usuarios&mensaje=Usuario creado correctamente" />';
  } else {
?>
    <div class="alert alert-danger" role="alert">
      Error al crear usuario <?php echo mysqli_error($con) ?>
    </div>
<?php
  }
}



?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Crear Usuarios</strong></h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <form action="Panel.php?modulo=Crear" method="post">
                <div class="for-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" required="">
                </div>
                <div class="for-group">
                  <label>Password</label>
                  <input type="password" name="pass" class="form-control" required="">
                </div>
                <div class="for-group">
                  <label>Nombre</label>
                  <input type="text" name="nombre" class="form-control" required="">
                </div>
                <div class="for-group">
                  <label>Apellido</label>
                  <input type="text" name="apellido" class="form-control" required="">
                </div>
                <div class="for-group">
                  <label>Ciudad</label>
                  <input type="text" name="ciudad" class="form-control" required="">
                </div>
                <div class="for-group">
                  <label>Telefono</label>
                  <input type="tel" name="telefono" class="form-control" required="">
                </div>
                <hr>
                <center>
                  <div class="for-group">
                    <button type="submit" class="btn btn-primary" name="guardar">guardar</button>
                  </div>
                </center>

                <div>
                  <a class="nav-link" href="Panel.php?modulo=Usuarios " title="Regresar">
                    <i class="fa fa-backward" aria-hidden="true"></i></a>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
