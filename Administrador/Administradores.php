<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if(isset($_REQUEST['IdBorrar'])){
$Id = mysqli_real_escape_string($con, $_REQUEST['IdBorrar']??''); 
$query = "DELETE from administradores where Idadmin= '".$Id."';";
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
$query = "UPDATE administradores SET estadoadmin = '1' WHERE Idadmin = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=El Administrador ha sido cambiado de estado con exito" />';
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
$query = "UPDATE administradores SET estadoadmin = '0' WHERE Idadmin = '".$Id."';";
$res = mysqli_query($con, $query);
if ($res){
  echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=El Administrador ha sido cambiado de estado con exito" />';
  }
else {
echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Administradores&mensaje=No se pudo cambiar de estado del Administrador ' .  mysqli_error ($con) . ' " />';
  }
}
?>
<div class="content-wrapper" style="background-color: black;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong style="color:white;">Administradores</strong></h1> 
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
                    <th>Acciones <font size=2><a href="Panel.php?modulo=Crear"> <i class="fa fa-cart-plus" aria-hidden="true"></i></a></font></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include_once "Basedata.php";
                    $con = mysqli_connect($host, $user, $pasword, $db);
                    $query = "SELECT Idadmin , nombreadmin, apellidoadmin, emailadmin, ciudadadmin, deparadmin, direccionadmin, telefonoadmin, tip_docadmin, num_docadmin, fech_nacadmin, estadoadmin  FROM administradores;";
                    $res = mysqli_query($con, $query);
                    
                    while ($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                      <td><?php echo $row['Idadmin']?></td>
                      <td><?php echo $row['nombreadmin'] ?></td> 
                      <td><?php echo $row['apellidoadmin'] ?></td> 
                      <td><?php echo $row['emailadmin'] ?></td>
                      <td><?php echo $row['ciudadadmin'] ?></td>
                      <td><?php echo $row['deparadmin'] ?></td>
                      <td><?php echo $row['direccionadmin'] ?></td>
                      <td><?php echo $row['telefonoadmin'] ?></td>
                      <td><?php echo $row['tip_docadmin'] ?></td>
                      <td><?php echo $row['num_docadmin'] ?></td>
                      <td><?php echo $row['fech_nacadmin'] ?></td>
                     <?php 
                         if (isset($_REQUEST['guardar'])){
                          include_once "Basedata.php";
                          // Llamar la base de datos desde el include_once.
                          $con = mysqli_connect($host, $user, $pasword, $db);
                         }
                        if ($row['estadoadmin'] == 1) {
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
                          <a href="Panel.php?modulo=EditarAdmin&Idadmin= <?php echo $row['Idadmin'] ?> " style="margin: 8px "> <i class="fas fa-edit"></i></a>
                          <a href="Panel.php?modulo=Administradores&IdBorrar= <?php echo $row['Idadmin'] ?> " class="text-danger borrar"> <i class="fas fa-trash"></i></a>
                          <a href="Panel.php?modulo=Administradores&IdEstado1= <?php echo $row['Idadmin'] ?> " class="btn btn-md" style="color:green;"> <i class="fa fa-check" aria-hidden="true"></i></a>
                          <a href="Panel.php?modulo=Administradores&IdEstado2= <?php echo $row['Idadmin'] ?> " class="btn btn-md" style="color:red;"> <i class="fa fa-times" aria-hidden="true"></i></a>
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