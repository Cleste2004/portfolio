<?php

$pg = "proyectos";

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

    
    
    <title>Proyectos</title>
</head>
<body id="proyectos">
<?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Proyectos</h1>
                <h2>Los siguientes son algunos de los trabajos que he realizado</h2>
              </div>
          </div>
          <div class="row"  >
            <div class="col-12 col-sm-4"  > 
              <div class="row border m-1 fondo" style="height: 520px;" >
                <img src="imagenes/abmclientes.png" alt="abmclientes" class="img-fluid">

                <div class="col-12 py-2 degrade ">
                  <h2>ABM clientes</h2>
                </div>
                <div class="col-12">
                  <p class="py-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                  

                </div>
                <div class="col-6 my-5">
                  <a href="" class="btn1">Ver online</a>

                </div>
                <div class="col-6 my-5">
                  <a href="" class="btn2">Codigo fuente</a>

                </div>
              </div>
              

            </div>
            <div class="col-12 col-sm-4 ">
              <div class="row  border m-1 fondo" style="height: 520px;">
                <img src="imagenes/abmventas.png" alt="abmventas" class="img-fluid">

                <div class="col-12 py-2 degrade">
                  <h2>Sistemas de gestion de ventas</h2>
                </div>
                <div class="col-12">
                  <p class="pt-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>

                </div>
                <div class="col-6 my-5">
                  <a href="" class="btn1">Ver online</a>

                </div>
                <div class="col-6 my-5">
                  <a href="" class="btn2">Codigo fuente</a>

                </div>
              </div>
              

            </div>
            <div class="col-12 col-sm-4">
              <div class="row  border m-1 fondo" style="height: 520px;">
                <img src="imagenes/proyecto-integrador.png" alt="Proyecto" class="img-fluid" >

                <div class="col-12 py-2 degrade ">
                  <h2>Proyecto integrador</h2>
                </div>
                <div class="col-12">
                  <p class="pt-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.

                  </p>

                </div>
                <div class="col-6 my-5">
                  <a href="" class="btn1">Ver online</a>

                </div>
                <div class="col-6 my-5">
                  <a href="" class="btn2">Codigo fuente</a>

                </div>
              </div>  
              

            </div>

          </div> 
          <?php include_once("footer.php"); ?>
      </body>
      </html> 