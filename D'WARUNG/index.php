<?php
   session_start();


        include("connection.php");
        include("functions.php");

        $user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>D'Warung</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.10.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+60 10 451 7757</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Tuesday-Sunday: 2PM - 11PM</span></i>
      </div>

      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">D'Warung Restaurant</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          
          
          
          <li><a href="Logout.php">Logout</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      

      <button class="book-a-table-btn scrollto d-none d-lg-flex" onclick="loadPage1()">Order</button>
          <script>
            function loadPage1() {
              window.location.href = "order.php";
            }
          </script>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat datang ke<span> D'Warung </span></h1>
          <h2>Menyampaikan makanan yang hebat selama lebih daripada 5 tahun!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu Kami</a>
            <a href="#specials" class="btn-book animated fadeInUp scrollto">Menu Istimewa </a>
          </div>
        </div>
        

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/11.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>D'Warung </h3>
            <p class="fst-italic">
              
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> +60 14 317 7757</li>
              <li><i class="bi bi-check-circle"></i> daengiskandar96@gmail.com</li>
              <li><i class="bi bi-check-circle"></i> D' Warung, 83200 Senggarang, Johor/li>
            </ul>
            <p>
              
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kenapa kita</h2>
          <p>Mengapa Memilih Gerai Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01 ANEKA MAKANAN YANG MENARIK</span>
              <h4>\\ Kami mejual makana tradisi dari berbagai negara seperti Tomyam dan Chicken Chop.</h4>
              
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02 Perkhidmatan pantas</span>
              <h4>\\ Kami menyedikan dan malayan pelangan dgn pastas agar pelangan tidak perlu menunggu lama.</h4>
              
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03 Harga lebih mudah</span>
              <h4> \\ Harga untuk setiap makanan dan minuman yang kami sediakan semuanya adalah mampu milik bagi setiap masyarakat</h4>
              <p></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Menu Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/tomyam.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tomyam</a><span>RM 7</span>
            </div>
            <div class="menu-ingredients">
           
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/chop.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Chop</a><span>RM 12</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cendol.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cendol</a><span>RM 3</span>
            </div>
            <div class="menu-ingredients">
             
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/lekor.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Keropok Lekor</a><span>$RM 4</span>
            </div>
            <div class="menu-ingredients">
            
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/paprik.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Paprik</a><span>RM 5</span>
            </div>
            <div class="menu-ingredients">
            
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/char.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Char Keew Tiaw</a><span>RM 7</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/bandung.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mee Bandung</a><span>RM 6</span>
            </div>
            <div class="menu-ingredients">
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/goreng.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mee Goreng</a><span>RM 6</span>
            </div>
            <div class="menu-ingredients">
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/usa.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Nasi Goreng USA</a><span>RM 9</span>
            </div>
            <div class="menu-ingredients">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Istimewa</h2>
          <p>Menu Istimewa Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cendol</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Chicken Chop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Tom Yam</a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cendol</h3>
                    <p class="fst-italic">Cendol adalah pencuci mulut sejuk yang diperbuat daripada tepung beras dan air pandan yang dibentuk secara ditekan melalui penapis ke dalam air, kemudian dicampur dengan sirap gula dari berbagai jenis (baik enau atau aren, tebu, perang, melaka mahupun nipah) dan santan.
                    </p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/scendol.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Chicken Chop</h3>
                    <p class="fst-italic">Chicken chop adalah hidangan yang disediakan dengan daging ayam tanpa tulang. Hidangan ini popular di hampir semua etnik masakan kerana rasanya yang lazat dan mudah dibuat. Ia biasanya disediakan dengan daging cincang dan disajikan dengan pelbagai iringan. Perasa dan agen pengikat memainkan peranan penting dalam penyediaan resipi chicken chop.
                    </p>
                    <p></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/chop.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tom Yam</h3>
                    <p class="fst-italic">Tom Yam dalam "Royal Thai General System of Transcription") adalah nama bagi dua hidangan sup atau berkuah yang serupa yang berasal dari Laos dan Thailand.</p>
                    <p>Tom yam memiliki ciri-ciri perasa pedas dan masam yang keratar, dengan penggunaan herba wangi. Rebusan asas dihasilkan dari stok dan bahan baru seperti serai, daun dari pokok Limau Purut, halia, jus limau nipis, sos ikan dan cili dipenyek.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/tomyam.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/map.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Lokasi </h3>
            <p class="fst-italic">
              
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> TL 69 Kg Parit Kadir Darat</li>
              <li><i class="bi bi-check-circle"></i> 83200, Senggarang</li>
              <li><i class="bi bi-check-circle"></i> Batu Pahat Johor</li>
            </ul>
            <p>
              
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>