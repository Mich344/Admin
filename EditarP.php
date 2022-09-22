<?php
include_once "Basedata.php";
$con =mysqli_connect($host,$user,$pasword,$db);
 if (isset($_REQUEST['guardar'])){
  $Id = mysqli_real_escape_string($con, $_REQUEST['Id']?? '');
  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombre']?? '');
  $precio = mysqli_real_escape_string($con, $_REQUEST['precio']?? '');
  $cantidad = mysqli_real_escape_string($con, $_REQUEST['cantidad']?? '');
  $talla = mysqli_real_escape_string($con, $_REQUEST['talla']?? '');
  $descripcion = mysqli_real_escape_string($con, $_REQUEST['descripcion']?? '');
  //$imagen = mysqli_real_escape_string($con, $_REQUEST['imagen']?? '');  
  $name_image = $_FILES['imagen']['name'];
  $type_image = $_FILES['imagen']['type'];
  $name_size = $_FILES['']['size'];
  $destino = $_SERVER['DOCUMENT_ROOT'] . '/Admin/upload/';
  $ruta = $destino.$name_image;
  move_uploaded_file($_FILES['imagen']['tmp_name'], $destino.$name_image);
  $query = "UPDATE productos SET nombre = '".$nombre."' ,precio = '".$precio."' ,cantidad = '".$cantidad."' ,talla = '".$talla."' ,descripcion = '".$descripcion."' ,imagen = '".$name_image."' WHERE Id = '".$Id."';";
  //Restultados 
  $res = mysqli_query($con, $query);
  if($res){
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=Producto '.$nombre.' Editado correctamente" />';
  }
  else {
?>
 <div class="alert alert-danger" role="alert">
   Error al editar producto <?php echo mysqli_error($con)?>
 </div>
<?php
  }
 }
 // Leer los usuarios 
 // ((mysqli_real_escape_string)) Significado llama consultas preparadas 
$Id= mysqli_real_escape_string ($con, $_REQUEST['Id']??'');
// Seleccionar los datos //
$query = "SELECT Id, nombre, precio, cantidad, talla, descripcion, imagen from productos WHERE  Id = '".$Id."';";
// Pasar la conexion $con, $query y almacenar en la variable $res. //
$res = mysqli_query($con , $query);
// (mysqli_fetch_assoc) Entregar un registro con el almacenamiento de la variable $res
$row = mysqli_fetch_assoc($res);

?> 
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Editar Productos</strong></h1>
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
              <form action="Panel.php?modulo=EditarP" method="post"  enctype="multipart/form-data">
                
                <div class="for-group">
                  <label>Nombre</label>
                  <input type="text" name="nombre"  class="form-control" value="<?php echo $row['nombre']?>">
                </div>
                  <div class="for-group">
                  <label>Precio</label>
                  <input type="number" name="precio"  class="form-control" value="<?php echo $row['precio']?>">
                </div>
                 <div class="for-group">
                  <label>Cantidad</label>
                  <input type="number" name="cantidad"  class="form-control" value="<?php echo $row['cantidad']?>">
                </div>
                 <div class="for-group">
                  <label>talla</label>
                  <input type="text" name="talla"  class="form-control" value="<?php echo $row['talla']?>">
                </div>
                 <div class="for-group">
                  <label>descripcion</label>
                  <input type="text" name="descripcion"  class="form-control" value="<?php echo $row['descripcion']?>">
                </div>
                <div class="photo">
                  <label>Imagen(es)</label>
                  <input type="text" name="imagenname"  class="form-control" value="<?php echo "'upload/".$row['imagen']."'"?>">
                  <input type="file" name="imagen" class="form-control-file">
                </div>
                <div class="for-group">
                    <br>
                    <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
                  <button type="submit" class="btn btn-primary" name="guardar">guardar</button>
                </div>
              </form>
            </div>
            <!-- LA CANTIDAD (EN EL FRONT) NO PUEDE SER MAYOR A LA CANTIDAD QUE HAY DE PORDUCTOS. ES DECIR NO SE PUEDE ESCOGER MAYOR CANTIDAD CIERTO PRODUCTO-->

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
