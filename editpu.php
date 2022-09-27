<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" href="css/boostrap.min.css">
    <script src="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"> </script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab"
                            aria-controls="home" aria-selected="true">Datos Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contraseña-tab" data-toggle="tab" href="#cambiocontra" role="tab"
                            aria-controls="profile" aria-selected="false">Cambiar contraseña</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="envio-tab" data-toggle="tab" href="#datosenvio" role="tab"
                            aria-controls="profile" aria-selected="false">Datos de envio</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-thumbnail"
                                    src="https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png"
                                    alt="">
                            </div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label for="usuario" class="col-2">Nombre</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="AGREGAR">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-2"> Email </label>
                                    <div class="col-8">
                                        <input type="email" class="form-control" value="AGREGAR">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel" class="col-2"> Telefono </label>
                                    <div class="col-8">
                                        <input type="tel" class="form-control" value="AGREGAR">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Actualizar</button>
                                    <button class="btn btn-danger">Cancelar</button>
                                    <button class="btn btn-success">Salir de esta pagina</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cambiocontra" role="tabpanel" aria-labelledby="contraseña-tab">
                        <div class="col-md-6 offset-md-3">
                            <h3 class="text-center">Cambiar contraseña</h3>
                            <div class="form-group row">
                                <label for="contrasenia" class="col-4">Contraseña actual</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ncontrasenia" class="col-4">Nueva contraseña</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ncontrasenia" class="col-4">Confirmar contraseña</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-info">Actualizar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="datosenvio" role="tabpanel" aria-labelledby="envio-tab">
                        <div class="col-md-6 offset-md-3">
                            <h3 class="text-center">Datos de envio</h3>
                            <div class="form-group row">
                                <label for="contrasenia" class="col-4">Direccion</label>
                                <div class="col-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ncontrasenia" class="col-4">Ciudad</label>
                                <div class="col-8">
                                  <!-- SE SUPONE QUE AQUI DEBE DE HABER UNA LISTA DE LAS CIUDADES -->
                                    <input type="ciudad" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ncontrasenia" class="col-4">No se que más xd</label>
                                <div class="col-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-info">Actualizar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
