<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>BukuTamu</title>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('Template/css/bootstrap.css') }}" />

  <!-- ANIMASI -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ asset('Template/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('Template/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('Template/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area animate__animated animate__fadeIn " >
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#beranda">
        <img src="{{ asset('baackend/dist/img/Marrene.png') }}" alt="AdminLTE Logo"
                height="70" width="200">
        </a>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://wa.me/6285176860801?text=Selamat siang kak,%0aSaya ingin menggunakan Buku Tamu Digital kak,%0akalau boleh tau caranya bagaimana ya kak?">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tema">Tema Pilihan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Hubungi Kami</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="login">
              <span>
                Masuk
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section id="beranda" class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Jadikan Pestamu <br>
                      Lebih Kece
                    </h1>
                    <p>
                      Jaman sekarang masih pakai Buku Tamu Manual ? mana keren.. pakai Buku Tamu Digital dong.. data tamu tersimpan aman dan yang pasti pesta kamu bakal jadi lebih Kece.
                    </p>
                    <div class="btn-box">
                      <a href="https://wa.me/6285176860801?text=Selamat siang kak,%0aSaya ingin menggunakan Buku Tamu Digital kak,%0akalau boleh tau caranya bagaimana ya kak?" class="btn1">
                        Hubungi Kami
                      </a>
                      <a href="login" class="btn2">
                        Masuk
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{ asset('Template/images/slider-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Share Your <br>
                      Digital Invitation
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Hubungi Kami
                      </a>
                      <a href="" class="btn2">
                        Tentang Kami
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{ asset('Template/images/slider-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Design Your <br>
                      Perfect Invitation
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Hubungi Kami
                      </a>
                      <a href="" class="btn2">
                        Tentang Kami
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{ asset('Template/images/slider-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section id="about" class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box" data-aos="fade-up" data-aos-duration="700">
            <img src="{{ asset('Template/images/about-img.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box" data-aos="fade-up" data-aos-duration="700">
            <div class="heading_container">
              <h2>
                Kepoin Kami Yuk..
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->

  <section id="tema" class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container" data-aos="fade-up" data-aos-duration="1000">
        <h2>
          Tema Andalan Kami
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box" data-aos="fade-up" data-aos-duration="1000">
            <div class="img-box" >
              <img src="{{ asset('Template/images/b1.jpg') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Look even slightly believable. If you are
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="img-box">
              <img src="{{ asset('Template/images/b2.jpg') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Anything embarrassing hidden in the middle
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="img-box">
              <img src="{{ asset('Template/images/b3.jpg') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Molestias magni natus dolores odio commodi. Quaerat!
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="heading_container">
        <h2>
          Pengalaman Pengguna Kami
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{ asset('Template/images/client.jpg') }}" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Eko
                      </h6>
                    </div>
                    <p>
                      Baru kali ini nemuin tempat buat undangan digital semurah ini
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section id="kontak" class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container" data-aos="fade-up" data-aos-duration="1000">
              <h2>
                Hubungi Kami Yuk
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Nama Kamu" />
              </div>
              <div>
                <input type="text" placeholder="Nomor Kamu" />
              </div>
              <div>
                <input type="email" placeholder="Email Kamu" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Tulis Pesan Yuk" />
              </div>
              <div class="btn_box">
                <button>
                  KIRIM
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            
            <div class="map" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <div id="googleMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1831631151604!2d105.2103043749839!3d-5.389032894589962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d1af2a9ab3e1%3A0x61b2020043280c77!2sMARRENE.id!5e0!3m2!1sen!2sid!4v1718122778260!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Telepon : +62 895-1981-2506
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : yanuarary088@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Lokasi Kami
          </span>
        </a>
      </div>

          <div class="col-md-6">
            <div class="info_form">
              <h4>
                IKUTI KAMI DI
              </h4>
              <form action="">
               
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Yanuar Ary Prototipe</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>