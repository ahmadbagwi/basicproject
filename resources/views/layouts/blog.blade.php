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
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#alur">Alur</a></li>
          <li><a href="#kriteria">Kriteria</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#infak">Infak</a></li>
          <li><a href="#artikel">Artikel</a></li>
          <li><a href="#kontak">Kontak</a></li>
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
      <a href="#get-started" class="btn-get-started scrollto" data-toggle="modal" data-target="#masuk-daftar">Daftar/Masuk</a>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Tentang
  ============================-->
  <section id="tentang" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Manfaatkan teknologi untuk belajar ilmu Syar'i</h2>
        <p class="separator">Dalam rangka menumbuhkan kecintaan Anak-anak terhadap Hadist Nabi Shalallahu Alaihi Wasallam, kami Pondok Nabawi membuka program "Anak Shalih Hafal Hadist", yaitu program pendampingan orang tua mengajarkan hadist-hadist pendek melalui gedget selama satu semester melalui grup WA yang terintregasi dengan akun pribadi di website Pondok Nabawi, yang mana kami berharap selain anak-anak kita mampu menghafal hadist-hadist pendek, mereka juga bisa menggunakan gedget untuk hal-hal kebaikan dengan pendampingan orang tua.</p>

      </div>
    </div>

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
    Alur
  ============================-->

  <section id="alur" class="about-us padd-section wow fadeInUp">
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
    Kriteria
  ============================-->

  <section id="kriteria" class="padd-section text-center wow fadeInUp">
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
    Galeri
  ============================-->
  <section id="galeri" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Galeri</h2>
        <p class="separator">Tapilan halaman akun monitoring</p>
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
    Video
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
    Testimoni
  ============================-->

  <section id="testimoni" class="padd-section text-center wow fadeInUp">
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
    Infak
  ============================-->
  <section id="infak" class="padd-section text-center wow fadeInUp">

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
    Artikel
  ============================-->
  <section id="artikel" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Artikel</h2>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-3.jpg" alt="img"></a>
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
    Kontak
  ============================-->
  <section id="kontak" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Pertanyaan atau saran</h2>
        <p class="separator">Kirimkan pertanyaan atau saran anda mengenai Pondok Nabawi melalui form dibawah ini</p>
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

            <a class="navbar-brand" href="#">Pondok Nabawi </a>
            <p>didirikan dengan semangat dakwah kepada generasi penerus islam khususnya anak-anak</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-4">
          <div class="list-menu">

            <!-- <ul class="list-unstyled">
              <li><a href="#">Taman Sari Persada Cluster Rose No</a></li>
              <li><a href="#">0812xxx</a></li>
              <li><a href="#">admin@pondoknabawi.id</a></li>
              <li><a href="#">Skype </a></li>
            </ul> -->

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>Pondok Nabawi | 2020</p>
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

  <!-- Modal -->
  <div class="modal fade" id="masuk-daftar" tabindex="-1" role="dialog" aria-labelledby="masuk-daftar" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="masuk-daftar">Masuk atau Daftar Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="masuk-tab" data-toggle="tab" href="#masuk" role="tab" aria-controls="masuk" aria-selected="true">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Daftar</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="masuk" role="tabpanel" aria-labelledby="masuk-tab">
              <!-- <form>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Harus email aktif">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> -->    

              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
              <!-- <form>
                <div class="form-group">
                  <label for="namaLengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Harus email aktif">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No.Hp</label>
                  <input type="text" class="form-control" id="phone" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> -->
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                  <div class="col-md-6">
                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                    <input type="hidden" name="role_id" value="3"> 
                <div class="form-group row">
                  <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('No Hp') }}</label>

                  <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

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
