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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Intratec</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1>Intratec<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="index.php">Página inicial</a></li>
      <li><a href="index.php#about">Sobre nós</a></li>
      <li><a href="index.php">Material didatico</a></li>
      <li class="dropdown"><a href="#"><span>Conta</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li class="dropdown"><a href="../logout.php"><span>Sair</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
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

 <!-- ======= Our Services Section ======= -->
 <section id="services" class="services sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Material didático</h2>
      <p> Disponibilizamos conteúdos didáticos para auxiliar o docente na aplicação da aula ao decorrer do ano letivo.</p>
    </div>

    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-4 col-md-6">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="bi bi-play-circle-fill"></i>
          </div>
          <h3>Vídeos</h3>
          <p>Nesta aba disponibilizaremos vídeos para o auxilio do docente.</p>
          <a href="dist/videosintranet.php" class="readmore stretched-link">Leia mais <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-folder-fill"></i>
          </div>
          <h3>Materiais</h3>
          <p> Nesta aba disponibilizaremos arquivos em geral para o auxilio do docente.</p>
          <a href="dist/materiais.html" class="readmore stretched-link">Leia mais <i class="bi bi-arrow-right"></i></a>
        </div> 
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-journal-richtext"></i>
          </div>
          <h3>Cursos e recomendações</h3>
          <p> Nesta aba disponibilizaremos cursos e recomendaçõespara a capacitação adicional ao Docente.</p>
          <a href="dist/cursos.html" class="readmore stretched-link">Leia mais <i class="bi bi-arrow-right"></i></a>
        </div> 
    </div>

  </div>
</section><!-- End Our Services Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

          </div><!-- End Info Item -->
        </div>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Intraetec</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>