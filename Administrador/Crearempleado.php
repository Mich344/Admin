<?php
include_once "Basedata.php";
$con = mysqli_connect($host, $user, $pasword, $db);
if (isset($_REQUEST['guardar'])) {

  $nombre = mysqli_real_escape_string($con, $_REQUEST['nombreempleado'] ?? '');
  $apellido = mysqli_real_escape_string($con, $_REQUEST['apellidoempleado'] ?? '');
  $email = mysqli_real_escape_string($con, $_REQUEST['emailempleado'] ?? '');
  $pasword = mysqli_real_escape_string($con, $_REQUEST['paswordempleado'] ?? '');
  $ciudad = mysqli_real_escape_string($con, $_REQUEST['ciudadempleado'] ?? '');
  $depar = mysqli_real_escape_string($con, $_REQUEST['deparempleado'] ?? '');
  $direccion = mysqli_real_escape_string($con, $_REQUEST['direccionempledo'] ?? '');
  $telefono = mysqli_real_escape_string($con, $_REQUEST['telefonoempleado'] ?? '');
  $tip_doc = mysqli_real_escape_string($con, $_REQUEST['tip_docempleado'] ?? '');
  $num_doc = mysqli_real_escape_string($con, $_REQUEST['num_docempleado'] ?? '');
  $fech_nac = mysqli_real_escape_string($con, $_REQUEST['fech_nacempleado'] ?? '');
 

  $query = "INSERT INTO empleados (nombreempleado, apellidoempleado, emailempleado,paswordempleado, ciudadempleado, deparempleado, direccionempledo, telefonoempleado, tip_docempleado, num_docempleado, fech_nacempleado, estadoempleado) VALUES ('" . $nombre . "' , '" . $apellido . "' , '" . $email . "' , '" . $pasword . "' , '" . $ciudad . "' , '" . $depar . "' ,'" . $direccion . "' , '" . $telefono . "' , '" . $tip_doc . "' ,  '" . $num_doc . "' ,  '" . $fech_nac . "', '1');";
  //Restultados 
  $res = mysqli_query($con, $query);
  if ($res) {
    echo '<meta http-equiv= "refresh" content="0; url=Panel.php?modulo=Empleados&mensaje=Empleados ' . $nombre . ' Creado correctamente" />';
  } else {
?>
    <div class="alert alert-danger" role="alert">
      Error al editar  <?php echo mysqli_error($con) ?>
    </div>
<?php
  }
}
?>
<div class="content-wrapper">

<style>
  .content-wrapper {
    background-color: black;
  }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><strong style="color: white;">Crear Usuario Empleado</strong></h1>
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
              <form action="Panel.php?modulo=Crearempleado" method="post">

                <div class="for-group">
                  <label>Nombres</label>
                  <input type="text" name="nombreempleado" class="form-control" pattern="[a-zA-Z]+" required="">
                </div>
                <div class="for-group">
                  <label>Apellidos</label>
                  <input type="text" name="apellidoempleado" class="form-control" pattern="[a-zA-Z]+" required="">
                </div>
                <div class="for-group">
                  <label>Correo</label>
                  <input type="email" name="emailempleado" class="form-control" required="">
                </div>
                <div class="for-group">
                  <label>Contraseña</label>
                  <input type="password" name="paswordempleado" class="form-control" minlength="5" maxlength="20" required="">
                </div>
                <div class="for-group">
                  <label>Ciudad</label>
                  <select class="form-control" name="ciudadempleado" required="">
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
                
                  <div class="for-group">
                    <label>Departamento</label>
                    <select class="form-control" name="deparempleado" required="">
                      <option value="">-</option>
                      <option value="Amazonas">Amazonas</option>
                      <option value="Antioquia">Antioquia</option>
                      <option value="Arauca">Arauca</option>
                      <option value="Atlántico">Atlántico</option>
                      <option value="Bolívar">Bolívar</option>
                      <option value="Boyacá">Boyacá</option>
                      <option value="Caldas">Caldas</option>
                      <option value="Caquetá">Caquetá</option>
                      <option value="Casanare">Casanare</option>
                      <option value="Cauca">Cauca</option>
                      <option value="Cesar">Cesar</option>
                      <option value="Chocó">Chocó</option>
                      <option value="Córdoba">Córdoba</option>
                      <option value="Cundinamarca">Cundinamarca</option>
                      <option value="Guainía">Guainía</option>
                      <option value="Guaviare">Guaviare</option>
                      <option value="Huila">Huila</option>
                      <option value="La Guajira">La Guajira</option>
                      <option value="Magdalena">Magdalena</option>
                      <option value="Meta">Meta</option>
                      <option value="Nariño">Nariño</option>
                      <option value="Norte de Santander">Norte de Santander</option>
                      <option value="Putumayo">Putumayo</option>
                      <option value="Quindío">Quindío</option>
                      <option value="Risaralda">Risaralda</option>
                      <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                      <option value="Santander">Santander</option>
                      <option value="Sucre">Sucre</option>
                      <option value="Tolima">Tolima</option>
                      <option value="Valle del Cauca">Valle del Cauca</option>
                      <option value="Vaupés">Vaupés</option>
                      <option value="Vichada">Vichada</option>
                    </select>
                  </div>
                </div>
                <div class="for-group">
                  <label>Direccion</label>
                  <input type="text" name="direccionempledo" class="form-control" required="" minlength="6">
                </div>
                <div class="for-group">
                  <label>Telefono</label>
                  <input type="tel" name="telefonoempleado" class="form-control" required="" pattern="[0-9]+" minlength="10" maxlength="14">
                </div>
                <div class="for-group">
                  <label>Tipo Documento</label>
                  <select class="custom-select" name="tip_docempleado" required="">
                    <option value="">-</option>
                    <option value="Cedula Ciudadania">Cedula De Ciudadania</option>
                    <option value="Cedula Extranjera">Cedula De Extranjeria</option>
                    <option value="Contraseña">Contraseña</option>
                  </select>
                </div>
                <div class="for-group">
                  <label>Numero Documento</label>
                  <input type="text" name="num_docempleado" class="form-control" required="" pattern="[0-9]+" maxlength="20" minlength="6">
                </div>
                <div class="for-group">
                  <label>Fecha Nacimiento</label>
                  <input type="date" name="fech_nacempleado" class="form-control" required="">
                </div>
                <center>
                  <div class="for-group">
                    <br>
                    <button class="glow-on-hover" type="submit" name="guardar">Crear Usuario</button>
                  </div>
                </center>
                <style>
                  .glow-on-hover {
                    width: 220px;
                    height: 50px;
                    border: none;
                    outline: none;
                    color: #fff;
                    background: #111;
                    cursor: pointer;
                    position: relative;
                    z-index: 0;
                    border-radius: 10px;
                  }

                  .glow-on-hover:before {
                    content: '';
                    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
                    position: absolute;
                    top: -2px;
                    left: -2px;
                    background-size: 400%;
                    z-index: -1;
                    filter: blur(5px);
                    width: calc(100% + 4px);
                    height: calc(100% + 4px);
                    animation: glowing 20s linear infinite;
                    opacity: 0;
                    transition: opacity .3s ease-in-out;
                    border-radius: 10px;
                  }

                  .glow-on-hover:active {
                    color: #000
                  }

                  .glow-on-hover:active:after {
                    background: transparent;
                  }

                  .glow-on-hover:hover:before {
                    opacity: 1;
                  }

                  .glow-on-hover:after {
                    z-index: -1;
                    content: '';
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    background: #111;
                    left: 0;
                    top: 0;
                    border-radius: 10px;
                  }

                  @keyframes glowing {
                    0% {
                      background-position: 0 0;
                    }

                    50% {
                      background-position: 400% 0;
                    }

                    100% {
                      background-position: 0 0;
                    }
                  }
                </style>
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
