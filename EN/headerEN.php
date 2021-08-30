<header>
        <nav class="navbar navbar-expand-md">   
            <div class="container-fluid">
              <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link  p-auto <?php echo ($pg == "Home") ? "active" :"" ?>" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  p-auto <?php echo ($pg == "About-me") ? "active" :"" ?>" href="about-me.php">About me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  p-auto <?php echo ($pg == "proyects") ? "active" :"" ?>" href="proyects.php">Proyects</a>
                   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo ($pg == "contact") ? "active" :"" ?>" href="contact.php">Contact</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                          <a class="nav-link <?php echo ($pg == "ES") ? "active" :"" ?>" href="../sobre-mi.php">ES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link <?php echo ($pg == "EN") ? "active" :"" ?>" href="">EN</a>
                         
                        </ul>
                        
                </form>
                <a href="" class="btn6">Download CV</a>
              </div>
            </div>
          </nav>

    </header>