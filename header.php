<header>
        <nav class="navbar navbar-expand-md">   
            <div class="container-fluid">
              <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link  pe-4 <?php echo ($pg == "index") ? "active" :"" ?>" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  pe-4 <?php echo ($pg == "sobre-mi") ? "active" :"" ?>" href="sobre-mi.php">Sobre mi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  pe-4 <?php echo ($pg == "proyectos") ? "active" :"" ?>" href="proyectos.php">Proyectos</a>
                   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo ($pg == "contacto") ? "active" :"" ?>" href="contacto.php">Contacto</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                          <a class="nav-link <?php echo ($pg == "ES") ? "active" :"" ?>" href="contacto.php">ES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link <?php echo ($pg == "EN") ? "active" :"" ?>" href="contactoEN.php">EN</a>
                      </ul>
                </form>
              </div>
            </div>
          </nav>

    </header>