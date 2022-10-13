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
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="home" aria-selected="true">Datos Usuario</a>
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
                                    <label for="email" class="col-2"> Correo </label>
                                    <div class="col-8">
                                        <input type="email" readonly class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img class="img-thumbnail" src="./images/contraseña.png" alt="">
                        </div>
                        <div class="col-8">
                            <div class="form-group row">
                                <label for="usuario" class="col-2">Contraseña</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tel" class="col-2">Cambiar Contraseña</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-2"> Confirmar Contraseña </label>
                                <div class="col-8">
                                    <input type="email" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img class="img-thumbnail" src="./images/envio.jpg" alt="">
                    </div>
                    <div class="col-8">
                        <div class="form-group row">
                            <label for="usuario" class="col-2">Direccion</label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel" class="col-2">Telefono</label>
                            <div class="col-8">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <div class="form-group row">
                                <label for="contraseña" class="col-4">Barrio</label>
                                <div class="col-8">
                                    <input type="text" class="form-control">
                                </div> -->

                <div class="for-group row">
                    <center> <label>Ciudad</label> </center>
                    <select class="form-control" name="ciudadproveedor" required="" value="<?php echo $row['ciudadproveedor'] ?>">
                        <option value="<?php echo $row['ciudadproveedor'] ?>"><?php echo $row['ciudadproveedor'] ?></option>
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
                <br>
                <br>
                <!--SEPARACIÓN DE TRABAJO DE BOTONES PARA EL DROPDOWN -->
                <div class="form-group text-center">
                    <button class="btn btn-info">Actualizar</button>
                   <a href="index1.php"> <button class="btn btn-danger" href="index1.php">Cancelar</button> </a>
                </div>
            </div>
        </div>
</body>

</html>
