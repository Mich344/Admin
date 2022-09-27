<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel=stylesheet" href="css/boostrap.min.css">
    <script src="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"> </script> 
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
  <div class="col-12">
         <div class="col-5">
<!--             <img src="https://static.vecteezy.com/system/resources/previews/005/544/718/original/profile-icon-design-free-vector.jpg" alt="" class="img">    -->

         </div>
         <div class="col-7">
            <div class="form-group row">
                <label for="codigo" class="col-4"> codigo: </label>
                <div class="col-8"></div>
                <input type="text" class="form-contrl" value="DEBEMOS LLAMAR CODIGO"> 
            </div>
         </div>
         <div class="col-7">
            <div class="form-group row">
                <label for="usuario" class="col-4"> usuario: </label>
                <div class="col-8"></div>
                <input type="text" class="form-contrl" value="LLAMAR DATOS DEL USUARIO"> 
            </div>
         </div>
         <div class="col-7">
            <div class="form-group row">
                <label for="email" class="col-4"> email: </label>
                <div class="col-8"></div>
                <input type="text" class="form-contrl" value="DATOS DEL USUARIO"> 
            </div>
         </div>
  </div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <h2>holi</h2>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<h3>holi</h3>
</div>
</div>

        </div>
    </div>
</div>
    
</body>
</html>
