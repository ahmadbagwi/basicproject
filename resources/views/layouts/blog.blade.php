<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $title }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/modal-video/css/modal-video.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  @yield('content')
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#body"><img src="img/svg/code.svg" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Beranda</a></li>
          <li><a href="#about-us">Tentang</a></li>
          <li><a href="#features">Visi Misi</a></li>
          <li><a href="#screenshots">Program</a></li>
          <li><a href="#team">Pendaftaran</a></li>
          <li><a href="#pricing">Kontak</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Pondok Nabawi</h1>
      <h2>Anak Shalih Hafal Hadits</h2>
      <img src="img/hero-img.png" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Daftar/Masuk</a>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Manfaatkan teknologi untuk belajar ilmu Syar'i</h2>
        <p class="separator">Dalam rangka menumbuhkan kecintaan Anak-anak terhadap Hadist Nabi Shalallahu Alaihi Wasallam, kami Pondok Nabawi membuka program "Anak Shalih Hafal Hadist", yaitu program pendampingan orang tua mengajarkan hadist-hadist pendek melalui gedget selama satu semester melalui grup WA yang terintregasi dengan akun pribadi di website Pondok Nabawi, yang mana kami berharap selain anak-anak kita mampu menghafal hadist-hadist pendek, mereka juga bisa menggunakan gedget untuk hal-hal kebaikan dengan pendampingan orang tua.</p>

      </div>
    </div>

    <!-- <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/cloud.svg" alt="img" class="img-fluid">
            <h4>Akun terintegrasi</h4>
            <p>Orang tua dapat membuat akun dan memonitoring perkambangan anak pada website ini</p>
            <a href="#">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/planet.svg" alt="img" class="img-fluid">
            <h4>Materi audio dan visual</h4>
            <p>Orang tua dan anak bisa sama-sama mempelajari materi yang disampaikan</p>
            <a href="#">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Komunikasi dua arah oleh pembina</h4>
            <p>Insya Allah dibina oleh Ustadz Riza Afrizal, LC Alumnus Fakultas Hadits UIM</p>
            <a href="#">read more</a>

          </div>
        </div>

      </div>
    </div> -->

  <!-- </section> -->

  <!--==========================
    Features Section
  ============================-->

  <!-- <section id="features" class="padd-section text-center wow fadeInUp"> -->

    <div class="container">
      <div class="section-title text-center">
        <h2>Anak Shalih Hafal Hadist (ASAH)</h2>
        <p class="separator">Keunggulan Program Anak Shalih Hafal Hadist (ASAH)</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/paint-palette.svg" alt="img" class="img-fluid">
            <h4>Akun Monitoring</h4>
            <p>Setiap orang tua dapat membuat akun pribadi, akun tersebut dapat digunakan untuk setor hafalan dan monitoring</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/vector.svg" alt="img" class="img-fluid">
            <h4>Materi Hadits Pendek</h4>
            <p>Setiap pekan akan di berikan materi hadist pendek maksimal 2 hadist berupa flayer dan audio melalui WAG</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/design-tool.svg" alt="img" class="img-fluid">
            <h4>Rekaman Audio</h4>
            <p>Setoran hafalan berupa rekaman audio dikirim melalui akun website, pembina akan memberikan penilaian dan catatan pada tiap setoran</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Murajaah</h4>
            <p>Program Murajaah (mengulang yang sudah dihafal) setiap satu bulan</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Sertifikat</h4>
            <p>Mendapatkan sertifikat jika dapat memenuhi target materi hafalan selama satu semester</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/cloud-computing.svg" alt="img" class="img-fluid">
            <h4>Pendampingan Orang Tua</h4>
            <p>Kesuksesan anak dalam mengikuti program ASAH adalah adanya pendampingan orang tua</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/pixel.svg" alt="img" class="img-fluid">
            <h4>Ujian Akhir</h4>
            <p>Ujian akhir akan dilaksanakan melalui vCall sesuai waktu yang disepakati</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/code.svg" alt="img" class="img-fluid">
            <h4>Pembina</h4>
            <p>Diasuh dan dibimbing oleh pembina Pondok Nabawi Ustadz Riza Afrizal, LC (Alumni Universitas Islam Madinah jurusan Hadits)</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="img/about-img.png" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>Alur Pembelajaran</span></h2>
            <p>Alur pembelajaran online dengan beberapa tahapan
            </p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Pembuatan akun</li>
              <li><i class="fa fa-angle-right"></i>Pendaftaran data anak</li>
              <li><i class="fa fa-angle-right"></i>Seleksi dan verifikasi</li>
              <li><i class="fa fa-angle-right"></i>Peserta yang lolos akan diundang bergabung WAG</li>
              <li><i class="fa fa-angle-right"></i>Materi disampaikan melalui WAG</li>
              <li><i class="fa fa-angle-right"></i>Orang tua merekam setoran hadits dan mengunggah melalui website</li>
              <li><i class="fa fa-angle-right"></i>Pembina akan mendengarkan setoran hadits dan memberikan penilaian</li>
              <li><i class="fa fa-angle-right"></i>Ujian vCall akan diaksanakan pada akhir semester</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Kriteria</h2>
        <p class="separator">Kriteria dan Persyaratan</p>
      </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/cloud.svg" alt="img" class="img-fluid">
            <h4>Maksimal 2 anak</h4>
            <p>Satu akun orang tua maksimal mendaftarkan dua orang anak</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/planet.svg" alt="img" class="img-fluid">
            <h4>Usia</h4>
            <p>Batasan usia yang dapat mengikuti adalah 4-11 tahun</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Kuota</h4>
            <p>Terbatas 50 Ikhwan 50 Akhwat, prioritas pendaftar awal</p>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>App Gallery</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="img/screen/1.jpg" alt="img"></div>
        <div><img src="img/screen/2.jpg" alt="img"></div>
        <div><img src="img/screen/3.jpg" alt="img"></div>
        <div><img src="img/screen/4.jpg" alt="img"></div>
        <div><img src="img/screen/5.jpg" alt="img"></div>
        <div><img src="img/screen/6.jpg" alt="img"></div>
        <div><img src="img/screen/7.jpg" alt="img"></div>
        <div><img src="img/screen/8.jpg" alt="img"></div>
        <div><img src="img/screen/9.jpg" alt="img"></div>

      </div>
    </div>

  </section>

  <!--==========================
    Video Section
  ============================-->

  <section id="video" class="text-center wow fadeInUp">
    <div class="overlay">
      <div class="container-fluid container-full">

        <div class="row">
          <a href="#" class="js-modal-btn play-btn" data-video-id="s22ViV7tBKE"></a>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
    Testimonials Section
  ============================-->

  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Kimberly Tran<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Henderson<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>David Spark<span>manager</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Pricing Table Section
  ============================-->
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Infak</h2>
        <p class="separator">Program ini sepenuhnya tidak berbayar, jika anda ingin memberikan infak silahkan mengirimkan melalui</p>

      </div>
    </div>

    <div class="container">
      <div class="row d-flex justify-content-center">

        <div class="col-md-6 col-lg-4">
          <div class="block-pricing">
            <div class="table">
              <h4>Rekening Infak Pondok Nabawi</h4>
              <h2>BNI Syariah</h2>
              <ul class="list-unstyled">
                <li>No. Rekening ...</li>
                <li>Atas Nama</li>
                <li>Kode Bank</li>
                <li>Mohon ikhlas menambahkan akhir 99 pada nominal transfer</li>
                <li>Contoh 50.099, 150.099</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Konfirmasi</a>
              </div>
            </div>
          </div>
        </div>

        
  </section>

  <!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Newsletter Section
  ============================-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Email Adress" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contact</h2>
        <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>Pondok Nabawi</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/modal-video/js/modal-video.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="{{ asset('contactform/contactform.js') }}"></script> -->

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
