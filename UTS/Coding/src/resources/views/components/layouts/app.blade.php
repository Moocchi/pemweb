<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Klinik Bojong Gede</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->

    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->

    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->

    <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">

    <!-- Header -->

    <header id="header" class="header sticky-top">
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">    
                    <h1 class="sitename">Klinik Bojong Gede</h1>
                </a>
                <nav id="navmenu" class="navmenu">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
                <a class="cta-btn d-none d-sm-block" href="{{ url('/admin') }}"><strong>Login</strong></a>
            </div>
        </div>
    </header>
    <!-- End Header -->

    {{ $slot }}

    <!-- Footer -->

    <footer id="footer" class="footer light-background text-center">
        <div class="container footer-top">
            <div class="row gy-4 justify-content-center">

                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center justify-content-center">
                        <span class="sitename">Klinik Bojong Gede</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Bojong Gede, Kec.Bojong</p>
                        <p class="mt-3">
                            <strong>Phone:</strong> <span>+62 813 1859 2741</span>
                        </p>
                        <p><strong>Email:</strong> <span>muhammadjarez@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center mt-4">
            <p>© <strong class="px-1 sitename">Moocchi</strong> All Rights Reserved</p>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Scroll Top -->

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->

    <div id="preloader"></div>

    <!-- Vendor JS Files -->

    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->

    <script src="{{ asset('front/assets/js/main.js') }}"></script>   
