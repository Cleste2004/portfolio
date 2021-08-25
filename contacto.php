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
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
              <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active pe-4" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active pe-4" href="sobre-mi.php">Sobre mi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active pe-4" href="proyectos.php">Proyectos</a>
                   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contacto.php">Contacto</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                          <a class="nav-link" href="">ES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="">EN</a>
                      </ul>
                </form>
              </div>
            </div>
          </nav>

    </header>
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
    <footer class="footer">
      <div class="container">
        <div class="row">
           <div class="col-12 col-sm-3">
             <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
              <a href="https://ar.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-12 col-sm-3">
            <A href="http://depcsuite.com">Esponsor DePC suite</A>

         </div>
         <div class="col-12 col-sm-3">
          <a href="mailto:glestrange92@gmail.com">glestrange92@gmail.com</a>

          </div> 
          

        </div>
      </div>

    
    <div>
        <a href="https://api.whatsapp.com/send?phone=541131218387" target="_blanck"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  </footer>
</body>
</html>