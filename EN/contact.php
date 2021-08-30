<?php 

$pg = "contacto";
if ($_POST){
  $nombre = $_REQUEST["txtNombre"];
  $correo = $_REQUEST["mail"];
  $mensaje = $_REQUEST["txtNombre"];
  $telefono = $_REQUEST["tel"];

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $cabeceras .= 'To: glestrange92@gmail.com' . "\r\n";
  $cabeceras .= 'From: Admin <info@gonzaloLestrange.com.ar>' . "\r\n";

  $para = "glestrange92@gmail.com";
  $asunto = "Se contactaron desde tu sitio web";
  $mensaje = "
  Nombre = $nombre<br>
  Correo = $correo<br>
  Tel&eacute;fono = $telefono<br>
  Mensaje = <br>$mensaje<br>
  ";

  mail($para, $asunto, $mensaje, $cabeceras);
  header ("Location: confirmacion-envio.php");



}




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    
    
    <title>Contacto</title>
</head>
<body id="contacto">
  <?php include_once("headerEN.php"); ?>  
    <main class="container">
        <div class="row">
            <div class="col-12 py-5" >
                <h1>Contact</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 QR">
                    <h2>I invite you to contact me by sending me a message or by whatsapp.</h2>
                    <img src="../imagenes/QR whatsapp.png" class="mt-5">

                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3" placeholder="Name">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3" placeholder="E-mail" >
                        <div>
                            <input type="tel" name="txtTelefono" id="txtTele" class="form-control mb-3" placeholder="telephone" >
                        </div>
                        <div>
                            <textarea name="" id="" cols="30" rows="10" class="form-control mb-3 " placeholder="Write your message here"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mb-3" >SEND</button>
                        </div>
                        
                    </form>

                </div>

            </div>

        </div>

    </main>
    <?php include_once("footerEN.php"); ?>
</body>
</html>