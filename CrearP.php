
<?php 
 if (isset($_REQUEST['guardar'])){
  include_once "Basedata.php";
  // Llamar la base de datos desde el include_once.
  $con = mysqli_connect($host, $user, $pasword, $db);
  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombre']?? '');
  $precio = mysqli_real_escape_string($con, $_REQUEST['precio']?? '');
  $cantidad = mysqli_real_escape_string($con, $_REQUEST['cantidad']?? '');
  $talla = mysqli_real_escape_string($con, $_REQUEST['talla']?? '');
  $descripcion = mysqli_real_escape_string($con, $_REQUEST['descripcion']?? ''); 
 // $imagen = mysqli_real_escape_string($con, $_REQUEST['imagen']?? '');

//print_r($_REQUEST);
$name_image = $_FILES['imagen']['name'];
$type_image = $_FILES['imagen']['type'];
$name_size = $_FILES['']['size'];
$destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/upload/';
$ruta = $destino.$name_image;
move_uploaded_file($_FILES['imagen']['tmp_name'], $destino.$name_image);
 
  $query = "INSERT INTO productos (nombre, precio, cantidad,talla, descripcion, imagen) VALUES ('".$nombre."' , '".$precio."' , '".$cantidad."' , '".$talla."' , '".$descripcion."' ,'".$name_image."');";
  //resultados
  $res = mysqli_query($con, $query);
  if($res){
    
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=Producto '. $nombre . '  creado correctamente" />';
  }
  else {
?>
 <div class="alert alert-danger" role="alert">
   Error al agregar producto <?php echo mysqli_error($con)?>
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
          <h1><strong>Agregar Productos</strong></h1>
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
                  <input type="text" name="nombre"  class="form-control" required = "" >
                </div>
                  <div class="for-group">
                    <label>Precio</label>
                    <input type="number" name="precio" class="form-control" required = "" >
                  </div>
                  <div class="for-group">
                  <label>Cantidad</label>
                  <input type="number" name="cantidad"  class="form-control" required = "" >
                </div>
               <div class="for-group">
                  <label>Talla</label>
                  <input type="text" name="talla"  class="form-control">
                </div>
               <div class="for-group">
                  <label>Descripción</label>
                  <input type="text" name="descripcion"  class="form-control"  required = "" >
                </div>
                <div class="photo">
                  <label>Imagen(es)</label>
                  <input id="imagen" class="form-control-file" type="file" name="imagen" multiple="multiple" required = "" >
                </div>
                <div class="for-group">
                    <br>
                  <button type="submit" class="btn btn-primary" name="guardar">guardar</button>
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
<script src="js/imagenproductos.js"></script>

                <div class="photo">
                  <label>Imagen(es)</label>
                  <input id="imagen" class="form-control-file" type="file" name="imagen" multiple="multiple" required = "" >
                </div>
                <div class="for-group">
                    <br>
                  <button type="submit" class="btn btn-primary" name="guardar">guardar</button>
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
<script src="js/imagenproductos.js"></script>
