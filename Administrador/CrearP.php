<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Css/Boton.css">
  <link rel="stylesheet" href="Css/Fondo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>

<?php
  include_once "Basedata.php";
  // Llamar la base de datos desde el include_once.
  $con = mysqli_connect($host, $user, $pasword, $db);
if (isset($_REQUEST['guardar'])) {
  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombre'] ?? '');
  $precio = mysqli_real_escape_string($con, $_REQUEST['precio'] ?? '');
  $cantidad = mysqli_real_escape_string($con, $_REQUEST['cantidad'] ?? '');
  $talla = mysqli_real_escape_string($con, $_REQUEST['talla'] ?? '');
  $descripcion = mysqli_real_escape_string($con, $_REQUEST['descripcion'] ?? '');
  $proveedor = mysqli_real_escape_string($con, $_REQUEST['proveedor'] ?? '');
  // EN CASO DE QUE NO RECIBA RESPUESTA ALGUNA EL CAMPO DE TALLA 
  $restalla = mysqli_real_escape_string($con, $_REQUEST['talla'] ?? '');
  if (empty($restalla)) {
    $talla  = "No aplica";
  } else {
    $talla = mysqli_real_escape_string($con, $_REQUEST['talla'] ?? '');
  }
  // $imagen = mysqli_real_escape_string($con, $_REQUEST['imagen']?? '');

  //print_r($_REQUEST);
  $name_image = $_FILES['imagen']['name'];
  $type_image = $_FILES['imagen']['type'];
  $name_size = $_FILES['']['size'];
  $destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/Administrador/upload/';
  $ruta = $destino . $name_image;
  move_uploaded_file($_FILES['imagen']['tmp_name'], $destino . $name_image);

  $query = "INSERT INTO productos (nombre, precio, cantidad,talla, descripcion, imagen, proveedor, estado) VALUES ('" . $nombre . "' , '" . $precio . "' , '" . $cantidad . "' , '" . $talla . "' , '" . $descripcion . "' ,'"  . $name_image . "' , '" . $proveedor. "', '1');";
  //resultados
  $res = mysqli_query($con, $query);
  if ($res) {
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=Producto ' . $nombre . '  creado correctamente" />';
  } else {
?>
    <div class="alert alert-danger" role="alert">
      Error al agregar producto <?php echo mysqli_error($con) ?>
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
          <h1><strong style="color: white;">Agregar Productos</strong></h1>
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
              <form action="Panel.php?modulo=CrearP" method="post" enctype="multipart/form-data">
                <div class="for-group">
                  <label>Nombre</label>
                  <input type="text" name="nombre" class="form-control" required="" pattern="[a-zA-Z]+" minlength="5">
                </div>
                <div class="for-group">
                  <label>Precio</label>
                  <input type="number" name="precio" class="form-control" required="">

                </div>
                <div class="for-group">
                  <label>Cantidad</label>
                  <input type="number" name="cantidad" class="form-control" required=""  pattern="[0-9]+" maxlength="8" minlength="1">
                </div>
                <div class="for-group">
                  <label>Talla</label>
                  <input type="text" name="talla" class="form-control">
                </div>
                <div class="for-group">
                  <label>Descripción</label>
                  <input type="text" name="descripcion" class="form-control" required="" maxlength="2000" minlength="10">
                </div>
                <div class="photo" style="width:450px">
                  <label>Imagen(es)</label>
                  <input id="imagen" class="form-control" type="file" name="imagen" multiple="multiple" required="" accept="image/png, image/jpg, image/jpeg, image/pjpeg">
                </div>
                <div class="for-group">
                  <?php 
                  $queryp = "SELECT Idproveedor, nombreproveedor, apellidoproveedor FROM proveedores WHERE estadoproveedor = 1;";
                  $resp = mysqli_query($con,$queryp);
                  $rowp = mysqli_num_rows($resp);                
                  ?>
                  <label>Proveedor</label>
                  <select name="proveedor" id="proveedor" class="form-select" aria-label="Default select example" required>
                    <option disabled selected>Seleccione un proveedor</option>
                  <?php
                  if ($rowp > 0) {
                    while ($proveedor = mysqli_fetch_array($resp)) {
                      ?>
                      <option value="<?php echo $proveedor['nombreproveedor'] . " " . $proveedor['apellidoproveedor'] ?>"><?php echo $proveedor['nombreproveedor'] . " " . $proveedor['apellidoproveedor'] ?></option>
                      <?php
                    }
                  }
                  ?>
                  </select>
                </div>
                <center>
                  <div class="for-group">
                    <br>
                    <button class="glow-on-hover" type="submit" name="guardar">Crear Producto</button>
                  </div>
                </center>
                <a href="Panel.php?modulo=Productos"><i class="fas fa-reply-all fa-lg text-danger" aria-hidden="true" title="Regresar"></i></a>
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
<script src="Js/imagenproductos.js"></script>
