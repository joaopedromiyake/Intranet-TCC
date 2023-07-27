<?php
session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:../index.php");
}
else{
    echo "Matricula:, " . $_SESSION['matricula'] . " Você está logado no Intratec!!<br>";
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Página de Vídeos</title>
        <!-- Favicon-->
        <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

    </head>
    <body>
    
        <header id="header" class="header d-flex align-items-center">

            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
              <a href="../indexdocente.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Intratec<span>.</span></h1>
              </a>
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a href="../indexdocente.php">Página inicial</a></li>
                  <li><a href="../indexdocente.php#about">Sobre nós</a></li>
                  <li><a href="../indexdocente.php">Material didatico</a></li>
                  <li class="dropdown"><a href="#"><span>Conta</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li class="dropdown"><a href="../logout.php"><span>Sair</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#contact">Contato</a></li>
                </ul>
              </nav><!-- .navbar -->
        
              <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        
            </div>
          </header><!-- End Header -->
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://vooozer.com/wp-content/uploads/2018/08/Livros-sobre-Copywritting.png" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Página de Vídeos</h1>
                    <p>Nessa aba disponibilizaremos alguns vídeos para o auxilio dos docentes caso necessário para o ministramento da aula.</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Nessa aba disponibilizaremos vídeos dos seguintes cursos: Administração, Contabilidade, Redes de Computadores</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="ratio ratio-16x9">
                                <iframe width="1280" height="720" src="https://www.youtube.com/embed/N1HhC69rKBA" title="Curso de contabilidade grátis - O que é a contabilidade? - Aula 01" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                            <h2 class="card-title">Contabilidade</h2>
                            <p class="card-text">No vídeo acima é voltado para o componente de contabilidade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="ratio ratio-16x9">
                                <iframe width="1239" height="697" src="https://www.youtube.com/embed/0GG5cYsla-0" title="Apresentação - Redes de Computadores" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                              
                              </div>
                            <h2 class="card-title">Redes de Computadores</h2>
                            <p class="card-text">Este vídeo é uma introdução sobre Redes de Computadores.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                          <div class="ratio ratio-16x9">
                            <iframe width="711" height="401" src="https://www.youtube.com/embed/_5GoqJSPPyA" title="ADMINISTRAÇÃO DE CARGOS E SALÁRIOS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            
                            </div>
                            <h2 class="card-title">Administração</h2>
                            <p class="card-text">O vídeo é uma introdução a Administração </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
