<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stunting | Aware</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/stun.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/stylee.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/stun.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/stun.png" alt="" height="75px" width="75px" style="margin-left: 50px !important"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">
                                        <li><a href="pengguna">Beranda</a></li>
                                        <li><a href="blog.html">Stunting</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Pengenalan</a></li>
                                                <li><a href="blog_details.html">Identifikasi Faktor Menyebabkan Stunting</a></li>
                                                <li><a href="elements.html">Tips Mengurangi Resiko</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Pemahaman Gizi</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Edukasi Tentang Gizi</a></li>
                                                <li><a href="blog_details.html">Informasi Makanan Bergizi</a></li>
                                                <li><a href="elements.html">Menu dan Resep Sehat</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Konsultasi</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Layanan Konsultasi Para Ahli</a></li>
                                                <li><a href="blog_details.html">Form Pertanyaan</a></li>
                                                <li><a href="elements.html">Membuat Janji Konsultasi</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Tim Ahli</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Profil Para Ahli</a></li>
                                                <li><a href="blog_details.html">Profil Tenaga Medis</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">{{ Auth::user()->name }}</a>
                                            <ul class="submenu">
                                                    <a href="{{ url('logout', []) }}" class="dropdown-item has-icon text-danger">
                                                        <i class="fas fa-sign-out-alt"></i> Logout
                                                    </a>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            {{-- <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                <a href="#" class="btn header-btn"></a>
                                <ul class="btn header-btn">
                                    <li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
                                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                            <div class="d-sm-none d-lg-inline-block"></div>{{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-divider"></div>
                                            <a href="{{ url('logout', []) }}" class="dropdown-item has-icon text-danger">
                                                <i class="fas fa-sign-out-alt"></i> Logout
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
    <section class="section">
        <div class="section-body">
            @yield('content')
        </div>
    </section>
<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>