<?php

$mensaje = "";

if (isset($_POST['glyphicon glyphicon glyphicon-shopping-cart'])) {
    switch ($_POST['glyphicon glyphicon glyphicon-shopping-cart']) {

        case 'agregar':
session_start();
            if (is_numeric(($_POST['Id']))) {
                $ID = ($_POST['id']);
                //$mensaje .= "ok ID correcto" . $ID . "</br>";
            } else {
                //$mensaje .= " ID incorrecto" . $ID . "</br>";
            }

            if (is_string(($_POST['nombre']))) {
                $NOMBRE = ($_POST['nombre']);
                //$mensaje .= "ok nombre correcto" . $NOMBRE . "</br>";
            } else {
                //$mensaje .= " nombre incorrecto" . $NOMBRE . "</br>";
                break;
            }
            if (is_numeric(($_POST['precio']))) {
                $PRECIO = ($_POST['precio']);
                //$mensaje .= "ok precio correcto" . $PRECIO . "</br>";
            } else {
                //$mensaje .= " precio incorrecto" . $PRECIO . "</br>";
                break;
            }
            if (is_numeric(($_POST['cantidad']))) {
                $CANTIDAD = ($_POST['cantidad']);
                //$mensaje .= "ok cantidad correcto" . $CANTIDAD . "</br>";
            } else {
                //$mensaje .= " cantidad incorrecto" . $CANTIDAD . "</br>";
                break;
            }

            if (!isset($_SESSION['carrito'])) {

                $producto = array(
                    'Id' => $ID,
                    'nombre' => $NOMBRE,
                    'precio' => $PRECIO,
                    'cantidad' => $CANTIDAD,

                );
                $_SESSION['carrito'][0] = $producto;
                $mensaje = "producto agregado al carrito";
            } else {

                $idproductos = array_column($_SESSION['carrito'], "Id");
                if (in_array($ID, $idproductos)) {
                    echo "<script>alert('el producto ya ha sido seleccionado');</script>";
                } else {
                    $numeroprodctos = count($_SESSION['carrito']);
                    $producto = array(
                        'Id' => $ID,
                        'nombre' => $NOMBRE,
                        'precio' => $PRECIO,
                        'cantidad' => $CANTIDAD,


                    );
                    $_SESSION['carrito'][$numeroprodctos] = $producto;
                    $mensaje = "producto agregado al carrito";
                }
            }

            //$mensaje = print_r($_SESSION, true);
            break;
        case "eliminar":
            if (is_numeric(($_POST['Id']))) {
                $ID = ($_POST['Id']);
                foreach ($_SESSION['carrito'] as $indice => $producto) {
                    if ($producto['Id'] == $ID) {
                        unset($_SESSION['carrito'][$indice]);
                        //echo "<script>alert('Elemento borrado');</script>";
                    }
                }
            } else {
                //$mensaje .= " ID incorrecto" . $ID . "</br>";
            }
            break;
    }
}
