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


    <script>
        // Some random colors
        const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

        const numBalls = 50;
        const balls = [];

        for (let i = 0; i < numBalls; i++) {
            let ball = document.createElement("div");
            ball.classList.add("ball");
            ball.style.background = colors[Math.floor(Math.random() * colors.length)];
            ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
            ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
            ball.style.transform = `scale(${Math.random()})`;
            ball.style.width = `${Math.random()}em`;
            ball.style.height = ball.style.width;

            balls.push(ball);
            document.body.append(ball);
        }

        // Keyframes
        balls.forEach((el, i, ra) => {
            let to = {
                x: Math.random() * (i % 2 === 0 ? -11 : 11),
                y: Math.random() * 12
            };

            let anim = el.animate(
                [{
                        transform: "translate(0, 0)"
                    },
                    {
                        transform: `translate(${to.x}rem, ${to.y}rem)`
                    }
                ], {
                    duration: (Math.random() + 1) * 2000, // random duration
                    direction: "alternate",
                    fill: "both",
                    iterations: Infinity,
                    easing: "ease-in-out"
                }
            );
        });
    </script>
    <!-- SEPARACION DE JAVASCRIPT Y DISEÑO -->
    <style>
        .ball {
            position: absolute;
            border-radius: 100%;
            opacity: 0.7;
        }
    </style>



    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="home" aria-selected="true">Datos Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contraseña-tab" data-toggle="tab" href="#cambiocontra" role="tab" aria-controls="profile" aria-selected="false">Cambiar contraseña</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="envio-tab" data-toggle="tab" href="#datosenvio" role="tab" aria-controls="profile" aria-selected="false">Datos de envio</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-thumbnail" src="https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png" alt="">
                            </div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label for="usuario" class="col-2">Nombre</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel" class="col-2">Apellidos</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-2"> Email </label>
                                    <div class="col-8">
                                        <input type="email" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Actualizar</button>
                                    <button class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cambiocontra" role="tabpanel" aria-labelledby="contraseña-tab">
                        <div class="col-md-6 offset-md-3">
                            <h3 class="text-center">Cambiar contraseña</h3>
                            <div class="form-group row">
                                <label for="contraseña" class="col-4">Contraseña actual</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contraseña" class="col-4">Nueva contraseña</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contraseña" class="col-4">Confirmar contraseña</label>
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
                                <label for="direccion" class="col-4">Direccion</label>
                                <div class="col-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="ciudad" class="col-4">Ciudad</label>
                                <div class="col-8">
                                    <input type="ciudad" class="form-control">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="telefono" class="col-4">Telefono</label>
                                <div class="col-8">
                                    <input type="tel" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contraseña" class="col-4">Barrio</label>
                                <div class="col-8">
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                                <br>

                                <div class="btn-group dropleft">
                                    <button type="button" id="CIUDADESBOTON" class="btn btn-secondary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ciudades
                                        <style>
                                            CIUDADESBOTON {
                                                height: 50px;
                                                width: 500px;
                                            }
                                        </style>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">Cali</button>
                                        <button class="dropdown-item" type="button">Medellin</button>
                                        <button class="dropdown-item" type="button">Florencia</button>
                                    </div>
                                </div>


<!--                             SEPARACIÓN DE TRABAJO DE BOTONES PARA EL DROPDOWN 
 -->

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
