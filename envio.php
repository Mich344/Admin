<?php

if (isset($_SESSION['IdCliente'])) {
?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-6">
       <div class="form-group">
        <h3>Datos Cliente</h3>
         <label for="">Nombre</label>
         <input type="text" name="nombreCli" id="nombreCli" class="form-control">
       </div>
       <div class="form-group">
         <label for="">Email</label>
         <input type="text" name="emailCli" id="emailCli" class="form-control">
       </div>
       <div class="form-group">
         <label for="">Direccion</label>
         <textarea name="direccionCli" id="direccionCli" class="form-control" row="3"></textarea>
       </div>
      </div>
    </div>
  </div>
<?php
} else {
?>

  <div class="mt-5 text-center">
    No eres usuario <a href="#">logueate </a> o <a href="#">registrate
  </div>
<?php
}
?>