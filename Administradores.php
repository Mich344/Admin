<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Administradores</strong></h1>
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
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Email</th>                  
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cuiudad</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Tip documento</th>
                    <th>Num documneto</th>
                    <th>Fech nacimiento</th>
                  </tr>
                </thead>

                <tbody>
                <?php
                  include_once "Basedata.php";
                   $con = mysqli_connect($host, $user, $pasword, $db);
                    $query = "SELECT Id, nombre , apellido, email, direccion, ciudad, telefono, tip_doc, num_doc, fech_nac from administradores;";
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
