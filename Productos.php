<?php
include_once "Basedata.php";
// Llamar la base de datos desde el include_once.
$con = mysqli_connect($host, $user, $pasword, $db);
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
            <?php
              include_once "Basedata.php";
               // Llamar la base de datos desde el include_once.
              $con = mysqli_connect($host, $user, $pasword, $db);
            ?>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="Tablaproductos" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $query = "SELECT Id, Nombre, Precio, Cantidad FROM productos; ";
                  //Restultados 
                  $res = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($res)) {
                  ?>
                    <tr>
                      <td><?php echo $row['Nombre'] ?></td>
                      <td><?php echo $row['Precio'] ?></td>
                      <td><?php echo $row['Cantidad'] ?></td>
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
producs
<?php
