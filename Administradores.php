<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdBorrar'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdBorrar']??''); 
$query = "DELETE from Administradores where Id= '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  ?>

<div class="alert alert-warning float-right" role="alert">
     <?php
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=El Administrador ha sido borrado con exito" />';
    ?>
     </div>
<?php
  }
else {
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=No se pudo borrar el Administrador ' .  mysqli_error ($con) . ' " />';
  }
}
?>
<!-- ACTUALIZAR  -->
<?php

include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdEstado1'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdEstado1']??''); 
$query = "UPDATE Administradores SET estado = '1' WHERE Administradores.Id = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=El Administrador sido cambiado de estado con exito" />';
  }
else {
?>
     <?php
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=No se pudo cambiar de estado del Administrador ' .  mysqli_error ($con) . ' " />';
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
$query = "UPDATE Administradores SET estado = '0' WHERE Administradores.Id = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=El Administrador sido cambiado de estado con exito" />';
  }
else {
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=No se pudo cambiar de estado del Administrador ' .  mysqli_error ($con) . ' " />';
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
              <table id="tablaAdministrador" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>                
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Talla</th>
                    <th>Descripción</th>
                    <th>Proveedor</th>
                    <th>Imagen(es)</th>
                    <th>Estado</th>
                    <th>Acciones <font size=2><a href="Panel.php?modulo="> <i class="fa fa-cart-plus" aria-hidden="true"></i></a></font></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include_once "Basedata.php";
                   $con = mysqli_connect($host, $user, $pasword, $db);
                    $query = "SELECT Id, nombre , apellido, email, direccion, ciudad, telefono, tip_doc, num_doc, fech_nac, estado from administradores;";
                    $res = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($res)){
                   
                  ?>
                  <tr>
                     <td><?php echo $row['Id']?></td>
                     <td><?php echo $row['nombre'] ?></td>
                      <td><?php echo $row['apellido'] ?></td> 
                      <td><?php echo $row['email'] ?></td> 
                      <td><?php echo $row['apellido'] ?></td>
                      <td><?php echo $row['ciudad'] ?></td>
                      <td><?php echo $row['telefono'] ?></td>
                      <td><?php echo $row['tip_doc'] ?></td>
                      <td><?php echo $row['num_doc'] ?></td>
                      <td><?php echo $row['fech_nac'] ?></td>
                     <td><?php echo $row['estado'] ?></td>
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
