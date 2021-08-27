<?php

$pg = "contacto";

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

    
    
    <title>Contacto</title>
</head>
<body id="contacto">
  <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5" >
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 QR">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                    <img src="imagenes/QR whatsapp.png">

                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3" placeholder="Nombre">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3" placeholder="E-mail" >
                        <div>
                            <input type="tel" name="txtTelefono" id="txtTele" class="form-control mb-3" placeholder="Telefono" >
                        </div>
                        <div>
                            <textarea name="" id="" cols="30" rows="10" class="form-control mb-3 " placeholder="Escribi aqui tu mensaje"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mb-3" >ENVIAR</button>
                        </div>
                        
                    </form>

                </div>

            </div>

        </div>

    </main>
    <?php include_once("footer.php"); ?>
</body>
</html>