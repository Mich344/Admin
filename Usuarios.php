<?php
include_once "Basedata.php";
// Llamar la base de datos desde el include_once.
$con = mysqli_connect($host, $user, $pasword, $db);
if (isset($_REQUEST['IdBorrar'])){
// sanetizar parametros
 $Id = mysqli_real_escape_string ($con ,$_REQUEST['IdBorrar']??'');
  $query = "DELETE from usuario where Id= '".$Id."';";
  $res = mysqli_query( $con, $query);
  if ($res){
    ?>
    <div class="alert alert-warning float-right" role="alert">
     Usuario borrado con exito.
    </div>
<?php
  }
  
  else{
    ?>
    <div class="alert alert-danger float-right" role="alert">
      Erro no se pudo borrar el usuario <?php echo mysqli_error ($con); ?> 
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
          <h1><strong>Usuarios</strong></h1>
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
                    <th>Correo</th>
                    <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Cuiudad</th>
                   <th>Telefono</th>
                   <th>Tip_doc</th>
                   
                    <th>
                     Acciones <a href="Panel.php?modulo=CrearU"> <i class="fa fa-plus" aria-hidden="true"></i></a></th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  include_once "Basedata.php";
                  // Llamar la base de datos desde el include_once.
                  $con = mysqli_connect($host, $user, $pasword, $db);
                  //Iniciar conexion poner datos desde la Basedata.
                  $query = "SELECT Id, email, nombre, apellido, ciudad, telefono, tip_doc, num_doc, fech_nac from usuario; ";
                  //Restultados 
                  $res = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($res)) {
                  ?>
                    <tr>
                      <td><?php echo $row['Id'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['nombre'] ?></td> 
                      <td><?php echo $row['apellido'] ?></td>
                      <td><?php echo $row['ciudad'] ?></td>
                      <td><?php echo $row['telefono'] ?></td>
                      <td><?php echo $row['tip_doc'] ?></td>
                    
                     
                      <td>
                        <a href="Panel.php?modulo=EditarU&Id= <?php echo $row['Id'] ?> " style="margin: 8px "> <i class="fas fa-edit"></i></a>
                        <a href="Panel.php?modulo=Usuarios&IdBorrar= <?php echo $row['Id'] ?> " class="text-danger borrar"> <i class="fas fa-trash"></i></a>
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
