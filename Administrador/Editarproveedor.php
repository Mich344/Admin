<?php
include_once "Basedata.php";
$con =mysqli_connect($host,$user,$pasword,$db);
 if (isset($_REQUEST['guardar'])){
  $Id = mysqli_real_escape_string($con, $_REQUEST['Idproveedor']?? '');
  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombreproveedor']?? '');
  $apellido = mysqli_real_escape_string($con, $_REQUEST['apellidoproveedor']?? '');
  $email = mysqli_real_escape_string($con, $_REQUEST['emailproveedor']?? '');
  $pasword= mysqli_real_escape_string($con, $_REQUEST['paswordproveedor']?? '');
  $ciudad = mysqli_real_escape_string($con, $_REQUEST['ciudadproveedor']?? ''); 
  $depar = mysqli_real_escape_string($con, $_REQUEST['deparproveedor'] ?? '');
  $direccion = mysqli_real_escape_string($con, $_REQUEST['direccionproveedor']?? '');
  $telefono = mysqli_real_escape_string($con, $_REQUEST['telefonoproveedor']?? '');
  $tip_doc = mysqli_real_escape_string($con, $_REQUEST['tip_docproveedor']?? '');
  $num_doc = mysqli_real_escape_string($con, $_REQUEST['num_docproveedor']?? '');
  $fech_nac = mysqli_real_escape_string($con, $_REQUEST['fech_nacproveedor']?? '');
  
  $query = "UPDATE proveedores SET nombreproveedor = '".$nombre."' ,apellidoproveedor = '".$apellido."' ,emailproveedor = '".$email."' ,paswordproveedor = '".$pasword."' ,ciudadproveedor = '".$ciudad."' ,deparproveedor = '".$depar."' ,direccionproveedor = '".$direccion."' ,telefonoproveedor = '".$telefono."' ,tip_docproveedor = '".$tip_doc."' ,num_docproveedor = '".$num_doc."' ,fech_nacproveedor = '".$fech_nac."' WHERE Idproveedor = '".$Id."';";
  //Restultados 
  $res = mysqli_query($con, $query);
  if($res){
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Proveedores&mensaje=Proveedor '.$nombre.' Editado correctamente" />';
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
$Id= mysqli_real_escape_string ($con, $_REQUEST['Idproveedor']??'');
// Seleccionar los datos //
$query = "SELECT Idproveedor, nombreproveedor, apellidoproveedor, emailproveedor, paswordproveedor, ciudadproveedor, deparproveedor, direccionproveedor, telefonoproveedor, tip_docproveedor, num_docproveedor, fech_nacproveedor from proveedores WHERE  Idproveedor = '".$Id."';";
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
          <h1><strong>Editar Proveedores</strong></h1>
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
              <form action="Panel.php?modulo=Editarproveedor" method="post">
                
                <div class="for-group">
                  <label>Nombre</label>
                  <input type="text" name="nombreproveedor"  class="form-control" pattern="[a-zA-Z]+" required="" value="<?php echo $row['nombreproveedor']?>">
                </div>
                  <div class="for-group">
                  <label>Apellido</label>
                  <input type="text" name="apellidoproveedor"  class="form-control" pattern="[a-zA-Z]+" required="" value="<?php echo $row['apellidoproveedor']?>">
                </div>
                 <div class="for-group">
                  <label>Email</label>
                  <input type="email" name="emailproveedor"  class="form-control" required="" value="<?php echo $row['emailproveedor']?>">
                </div>
                 <div class="for-group">
                  <label>Password</label>
                  <input type="password" name="paswordproveedor"  class="form-control" minlength="5" maxlength="20" required="" value="<?php echo $row['paswordproveedor']?>">
                </div>
                 <div class="for-group">
                 <div class="for-group">
                  <label>Ciudad</label>
                  <select class="form-control" name="ciudadproveedor" required="" value="<?php echo $row['ciudadproveedor']?>">
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
                  <input type="text" name="deparproveedor"  class="form-control" value="<?php echo $row['deparproveedor']?>">
                </div>
                <div class="for-group">
                  <label>Direccion</label>
                  <input type="text" name="direccionproveedor"  class="form-control" value="<?php echo $row['direccionproveedor']?>">
                </div>
                <div class="for-group">
                  <label>Telefono</label>
                  <input type="tel" name="telefonoproveedor"  class="form-control" value="<?php echo $row['telefonoproveedor']?>">
                </div>
                <div class="for-group">
                  <label>Tipo Documento</label>
                  <input type="text" name="tip_docproveedor"  class="form-control" value="<?php echo $row['tip_docproveedor']?>">
                </div>
                <div class="for-group">
                  <label>Numero Documento</label>
                  <input type="text" name="num_docproveedor"  class="form-control" value="<?php echo $row['num_docproveedor']?>">
                </div>
                <div class="for-group">
                  <label>Fecha Nacimiento</label>
                  <input type="date" name="fech_nacproveedor"  class="form-control" value="<?php echo $row['fech_nacproveedor']?>">
                </div>
                <div class="for-group">
                    <br>
                    <input type="hidden" name="Idproveedor" value="<?php echo $row['Idproveedor'] ?>">
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
