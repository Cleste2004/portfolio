<?php

$pg = "index";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    
    
    <title>Inicio</title>
</head>
<body id="index">
<?php include_once("header.php"); ?>
    <main class="container">
      <div class="row">
        <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
            <div>
                <p class="Titinicio">Bienvenido a mi sitio web</p>
            </div>
        </div>
    </div>
      <div class="row">
          <div class="col-12 mt-4 text-center">
              <a href="proyectos.php"><img src="imagenes/imagen fondo 1.png" class="circulo"></a>
          </div>
      </div>
      
      <div class="row  btn4">
          <div class="col-12 text-center">
              <a href="proyectos.php" class="btn3">Conoce mis proyectos</a>
          </div>
      </div>
  </main>
  <?php include_once("footer.php"); ?>
</html>