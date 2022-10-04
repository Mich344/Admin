<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdBorrar'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdBorrar']??''); 
$query = "DELETE from productos where Id= '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  ?>

<div class="alert alert-warning float-right" role="alert">
     <?php
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=El producto ha sido borrado con exito" />';
    ?>
     </div>
<?php
  }
else {
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=No se pudo borrar el producto ' .  mysqli_error ($con) . ' " />';
  }
}
?>
<!-- ACTUALIZAR  -->
<?php

include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdEstado1'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdEstado1']??''); 
$query = "UPDATE productos SET estado = '1' WHERE productos.Id = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=El productoha sido cambiado de estado con exito" />';
  }
else {
?>
     <?php
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=No se pudo cambiar de estado el producto ' .  mysqli_error ($con) . ' " />';
    ?>
    <?php
  }
}
?>
<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);

if(isset($_REQUEST['IdEstado2'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdEstado2']??''); 
$query = "UPDATE productos SET estado = '0' WHERE productos.Id = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=El productoha sido cambiado de estado con exito" />';
  }
else {
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Productos&mensaje=No se pudo cambiar de estado el producto ' .  mysqli_error ($con) . ' " />';
  }
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Productos</strong></h1> 
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
             <!--  <?php //var_dump($_SERVER) ?> -->
              <table id="tablaProductos" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>                
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Talla</th>
                    <th>Descripción</th>
                    <th>Imagen(es)</th>
                    <th>Estado</th>
                    <th>Acciones <font size=2><a href="Panel.php?modulo=CrearP"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a></font></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include_once "Basedata.php";
                    $con = mysqli_connect($host, $user, $pasword, $db);
                    $query = "SELECT Id, nombre, precio, cantidad, talla, descripcion, imagen, estado FROM productos;";
                    $res = mysqli_query($con, $query);
                    
                    while ($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                     <td><?php echo $row['Id']?></td>
                      <td><?php echo $row['nombre'] ?></td> 
                      <td><?php echo $row['precio'] ?></td> 
                      <td><?php echo $row['cantidad'] ?></td>
                      <td><?php echo $row['talla'] ?></td>
                      <td><?php echo $row['descripcion'] ?></td>
                      <td> <center><?php echo "<img width='80' height='80' src='/Admin/Administrador/upload/".$row['imagen']."'>"?></center> </td>
                     <?php 
                         if (isset($_REQUEST['guardar'])){
                          include_once "Basedata.php";
                          // Llamar la base de datos desde el include_once.
                          $con = mysqli_connect($host, $user, $pasword, $db);
                         }
                        if ($row['estado'] == 1) {
                          ?>
                              <center><td><button class="btn btn-success btn-xs">Activo</button></td></center>

                              <?php
                              }

                              else { 
                                ?>
                                  <center> <td><button class="btn btn-danger btn-xs">Inactivo</button></td> </center>
                              <?php
                              }
                              ?>
                       <td>
                          <a href="Panel.php?modulo=EditarP&Id= <?php echo $row['Id'] ?> " style="margin: 8px "> <i class="fas fa-edit"></i></a>
                          <a href="Panel.php?modulo=Productos&IdBorrar= <?php echo $row['Id'] ?> " class="text-danger borrar"> <i class="fas fa-trash"></i></a>
                          <a href="Panel.php?modulo=Productos&IdEstado1= <?php echo $row['Id'] ?> " class="btn btn-md" style="color:green;"> <i class="fa fa-check" aria-hidden="true"></i></a>
                          <a href="Panel.php?modulo=Productos&IdEstado2= <?php echo $row['Id'] ?> " class="btn btn-md" style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  <?php
                  }
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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
