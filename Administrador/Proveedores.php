<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdBorrar'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdBorrar']??''); 
$query = "DELETE from proveedores where Idproveedor= '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  ?>

<div class="alert alert-warning float-right" role="alert">
     <?php
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=El producto ha sido borrado con exito" />';
    ?>
     </div>
<?php
  }
else {
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=No se pudo borrar el producto ' .  mysqli_error ($con) . ' " />';
  }
}
?>
<!-- ACTUALIZAR  -->
<?php

include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdEstado1'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdEstado1']??''); 
$query = "UPDATE proveedores SET estadoproveedor = '1' WHERE Idproveedor = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=El proveedor ha sido cambiado de estado con exito" />';
  }
else {
?>
     <?php
     echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=No se pudo cambiar de estado del proveedor ' .  mysqli_error ($con) . ' " />';
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
$query = "UPDATE proveedores SET estadoproveedor = '0' WHERE Idproveedor = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=El proveedor ha sido cambiado de estado con exito" />';
  }
else {
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=No se pudo cambiar de estado del proveedor ' .  mysqli_error ($con) . ' " />';
  }
}
?>
<div class="content-wrapper" style="background-color: black;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong style="color:white;">Proveedores</strong></h1> 
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
              <table  class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>                
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Departamento</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Tipo Documento</th>
                    <th>Numero Documento</th>
                    <th>Fecha Nacimiento</th>
                    <th>Estado</th>
                    <th>Acciones <font size=2><a href="Panel.php?modulo=Crearproveedor"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a></font></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include_once "Basedata.php";
                    $con = mysqli_connect($host, $user, $pasword, $db);
                    $query = "SELECT Idproveedor , nombreproveedor, apellidoproveedor, emailproveedor, ciudadproveedor, deparproveedor, direccionproveedor, telefonoproveedor, tip_docproveedor, num_docproveedor, fech_nacproveedor, estadoproveedor  FROM proveedores;";
                    $res = mysqli_query($con, $query);
                    
                    while ($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                      <td><?php echo $row['Idproveedor']?></td>
                      <td><?php echo $row['nombreproveedor'] ?></td> 
                      <td><?php echo $row['apellidoproveedor'] ?></td> 
                      <td><?php echo $row['emailproveedor'] ?></td>
                      <td><?php echo $row['ciudadproveedor'] ?></td>
                      <td><?php echo $row['deparproveedor'] ?></td>
                      <td><?php echo $row['direccionproveedor'] ?></td>
                      <td><?php echo $row['telefonoproveedor'] ?></td>
                      <td><?php echo $row['tip_docproveedor'] ?></td>
                      <td><?php echo $row['num_docproveedor'] ?></td>
                      <td><?php echo $row['fech_nacproveedor'] ?></td>
                     <?php 
                         if (isset($_REQUEST['guardar'])){
                          include_once "Basedata.php";
                          // Llamar la base de datos desde el include_once.
                          $con = mysqli_connect($host, $user, $pasword, $db);
                         }
                        if ($row['estadoproveedor'] == 1) {
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
                          <a href="Panel.php?modulo=Editarproveedor&Idproveedor= <?php echo $row['Idproveedor'] ?> " style="margin: 8px "> <i class="fas fa-edit"></i></a>
                          <a href="Panel.php?modulo=Proveedores&IdBorrar= <?php echo $row['Idproveedor'] ?> " class="text-danger borrar"> <i class="fas fa-trash"></i></a>
                          <a href="Panel.php?modulo=Proveedores&IdEstado1= <?php echo $row['Idproveedor'] ?> " class="btn btn-md" style="color:green;"> <i class="fa fa-check" aria-hidden="true"></i></a>
                          <a href="Panel.php?modulo=Proveedores&IdEstado2= <?php echo $row['Idproveedor'] ?> " class="btn btn-md" style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i></a>
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
