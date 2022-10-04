<?php
include_once "Basedata.php";
$con =mysqli_connect($host,$user,$pasword,$db);
 if (isset($_REQUEST['guardar'])){
  $Id = mysqli_real_escape_string($con, $_REQUEST['Idempleado']?? '');
  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombreempleado']?? '');
  $apellido = mysqli_real_escape_string($con, $_REQUEST['apellidoempleado']?? '');
  $email = mysqli_real_escape_string($con, $_REQUEST['emailempleado']?? '');
  $pasword= mysqli_real_escape_string($con, $_REQUEST['paswordempleado']?? '');
  $ciudad = mysqli_real_escape_string($con, $_REQUEST['ciudadempleado']?? ''); 
  $depar = mysqli_real_escape_string($con, $_REQUEST['deparempleado'] ?? '');
  $direccion = mysqli_real_escape_string($con, $_REQUEST['direccionempleado']?? '');
  $telefono = mysqli_real_escape_string($con, $_REQUEST['telefonoempleado']?? '');
  $tip_doc = mysqli_real_escape_string($con, $_REQUEST['tip_docempleado']?? '');
  $num_doc = mysqli_real_escape_string($con, $_REQUEST['num_docempleado']?? '');
  $fech_nac = mysqli_real_escape_string($con, $_REQUEST['fech_nacempleado']?? '');
  
  $query = "UPDATE empleados SET nombreempleado = '".$nombre."' ,apellidoempleado = '".$apellido."' ,emailempleado = '".$email."' ,paswordempleado = '".$pasword."' ,ciudadempleado = '".$ciudad."' ,deparempleado = '".$depar."' ,direccionempleado = '".$direccion."' ,telefonoempleado = '".$telefono."' ,tip_docempleado = '".$tip_doc."' ,num_docempleado = '".$num_doc."' ,fech_nacempleado = '".$fech_nac."' WHERE Idempleado = '".$Id."';";
  //Restultados 
  $res = mysqli_query($con, $query);
  if($res){
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Empleados&mensaje=Empleado '.$nombre.' Editado correctamente" />';
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
$Id= mysqli_real_escape_string ($con, $_REQUEST['Idempleado']??'');
// Seleccionar los datos //
$query = "SELECT Idempleado, nombreempleado, apellidoempleado, emailempleado, paswordempleado, ciudadempleado, deparempleado, direccionempleado, telefonoempleado, tip_docempleado, num_docempleado, fech_nacempleado from empleados WHERE  Idempleado = '".$Id."';";
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
          <h1><strong>Editar empleadoes</strong></h1>
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
              <form action="Panel.php?modulo=Editarempleado" method="post">
                
                <div class="for-group">
                  <label>Nombre</label>
                  <input type="text" name="nombreempleado"  class="form-control" pattern="[a-zA-Z]+" required="" value="<?php echo $row['nombreempleado']?>">
                </div>
                  <div class="for-group">
                  <label>Apellido</label>
                  <input type="text" name="apellidoempleado"  class="form-control" pattern="[a-zA-Z]+" required="" value="<?php echo $row['apellidoempleado']?>">
                </div>
                 <div class="for-group">
                  <label>Email</label>
                  <input type="email" name="emailempleado"  class="form-control" required="" value="<?php echo $row['emailempleado']?>">
                </div>
                 <div class="for-group">
                  <label>Password</label>
                  <input type="password" name="paswordempleado"  class="form-control" minlength="5" maxlength="20" required="" value="<?php echo $row['paswordempleado']?>">
                </div>
                 <div class="for-group">
                 <div class="for-group">
                  <label>Ciudad</label>
                  <select class="form-control" name="ciudadempleado" required="" value="<?php echo $row['ciudadempleado']?>">
                    <option value="">-</option>
                    <option value="Arauca">Arauca</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Barranquilla">Barranquilla</option>
                    <option value="Bogotá">Bogotá</option>
                    <option value="Bucaramanga">Bucaramanga</option>
                    <option value="Cali">Cali</option>
                    <option value="Cartagena">Cartagena</option>
                    <option value="Cúcuta">Cúcuta</option>
                    <option value="Florencia">Florencia</option>
                    <option value="Ibagué">Ibagué</option>
                    <option value="Leticia">Leticia</option>
                    <option value="Manizales">Manizales</option>
                    <option value="Medellín">Medellín</option>
                    <option value="Mitú">Mitú</option>
                    <option value="Mocoa">Mocoa</option>
                    <option value="Montería">Montería</option>
                    <option value="Neiva">Neiva</option>
                    <option value="Pasto">Pasto</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Popayán">Popayán</option>
                    <option value="Puerto Carreño">Puerto Carreño</option>
                    <option value="Puerto Inírida">Puerto Inírida</option>
                    <option value="Quibdó">Quibdó</option>
                    <option value="Riohacha">Riohacha</option>
                    <option value="San Andrés">San Andrés</option>
                    <option value="San José del Guaviare">San José del Guaviare</option>
                    <option value="Santa Marta">Santa Marta</option>
                    <option value="Sincelejo">Sincelejo</option>
                    <option value="Tunja">Tunja</option>
                    <option value="Valledupar">Valledupar</option>
                    <option value="Villavicencio">Villavicencio</option>
                    <option value="Yopal">Yopal</option>
                  </select>
                </div>
                <div class="for-group">
                  <label>Departamento</label>
                  <input type="text" name="deparempleado"  class="form-control" value="<?php echo $row['deparempleado']?>">
                </div>
                <div class="for-group">
                  <label>Direccion</label>
                  <input type="text" name="direccionempleado"  class="form-control" value="<?php echo $row['direccionempleado']?>">
                </div>
                <div class="for-group">
                  <label>Telefono</label>
                  <input type="tel" name="telefonoempleado"  class="form-control" value="<?php echo $row['telefonoempleado']?>">
                </div>
                <div class="for-group">
                  <label>Tipo Documento</label>
                  <input type="text" name="tip_docempleado"  class="form-control" value="<?php echo $row['tip_docempleado']?>">
                </div>
                <div class="for-group">
                  <label>Numero Documento</label>
                  <input type="text" name="num_docempleado"  class="form-control" value="<?php echo $row['num_docempleado']?>">
                </div>
                <div class="for-group">
                  <label>Fecha Nacimiento</label>
                  <input type="date" name="fech_nacempleado"  class="form-control" value="<?php echo $row['fech_nacempleado']?>">
                </div>
                <div class="for-group">
                    <br>
                    <input type="hidden" name="Idempleado" value="<?php echo $row['Idempleado'] ?>">
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
