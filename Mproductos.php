<div class="new">
    <div class="container">
      <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
        <h3 class="title">Productos <span> Nuevos</span></h3>
        <p>Productos subidos recientemente </p>
      </div>
      <div class="new-info row">
        <!-- INCLUIMOS LA BASE DE DATOS AL INDEX -->
        <?php include_once "Basedata.php";
        /*CONECTA LA BASE DE DATOS (BASEDATA) CON EL LOCALHOST, USUARIO, CONTRASEÑA Y DB*/
        $con = mysqli_connect($host, $user, $pasword, $db);
        /* UTILIZA UN REQUERIMIENTO DONDE SE VA A SELECCIONAR TODOS LOS PRODUCTOS CON SU ID, NOMBRE, PRECIO Y CANTIDAD DE LA TABLA PRODUCTOS  */
       	$query = "SELECT Id, nombre, precio, cantidad, talla, descripcion, imagen, estado FROM productos";
        /* DA UNA RESPUESTA CON EL MYSQL CON LOS REQUERIMIENTOS Y LA CONEXION */
        $res = mysqli_query($con, $query);
         while ($row = mysqli_fetch_assoc($res)) {
              if ($row['estado'] == 1) {
              ?>
                <div class="col-md-3 gallery-grid gallery-grid2 wow flipInY animated" data-wow-delay=".9s">
                  <a href="single.php?modulo=single&Id=<?php echo $row['Id'] ?>"><?php echo "<img src='upload/" . $row['imagen'] . "' class='img-responsive' alt=''>" ?></a>
                  <div class="gallery-text simpleCart_shelfItem">
                    <h5><a class="name" href="single.php"> <?php echo $row['nombre'] ?> </a></h5>
                    <p><span class="item_price"><?php echo $row['precio'] ?></span></p>
                    <h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
                    <ul>
                      <li><a href="products.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
                      <li><a class="item_add" href=""><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
                    </ul>
                  </div>
                </div>
              <?php
            }
      }
          ?>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
