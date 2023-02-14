<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/img/motion round/16.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <style>
        .swiper-slide{
            width: 500px;
            padding: 25px;
        }
    </style>
    @yield('style')
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s" -->

<!-- tp-header-area-start -->
<header class="d-none d-lg-block">
    <div id="header-sticky" class="tp-header-area header-transparent pl-165 pr-165 pt-35">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="tp-logo">
                        <a href="{{route('home')}}"><img src="{{asset('front/assets/img/motion round/')}}/{{$setting->logo}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="tp-main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="tp-menu-bar text-end">
                        <button><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- tp-header-area-end -->

<!-- mobile-menu-area -->
<div id="header-sticky-mobile" class="tp-md-menu header-transparent d-lg-none pt-40 pb-40">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="tp-logo">
                    <a href="{{route('home')}}"><img src="{{asset('front/assets/img/motion round/')}}/{{$setting->logo}}" alt=""></a>
                </div>
            </div>
            <div class="col-6">
                <div class="bar text-end">
                    <button class="tp-menu-bar" type="submit"><i class="fal fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area-end -->

<!-- tp-offcanvus-area-start -->
<div class="tp-offcanvas-area bg-light">
    <div class="tpoffcanvas ">
        <div class="tpoffcanvas__logo">
            <a href="{{route('home')}}">
                <img src="{{asset('front/assets/img/motion round/')}}/{{$setting->logo}}" alt="">
            </a>
        </div>
        <div class="tpoffcanvas__close-btn">
            <a class="close-btn" href="javascript:void(0)"><i class="fal fa-times-hexagon"></i></a>
        </div>
        <div class="tpoffcanvas__content d-none d-sm-block">
            <p class="text-light">We deploy world-class Creative <br> on demand.</p>
        </div>
        <div class="mobile-menu">

        </div>
        <div class="tpoffcanvas__contact">
            <span class="text-light">Contact us</span>
            <ul>
                <li><i class="fas fa-star "></i> <a class="text-light" href="https://goo.gl/maps/abHegV4AoiJA6Syd8" target="_blank">Melbone
                        st, Australia, Ny 12099</a></li>
                <li><i class="fas fa-star"></i> <a class="text-light" href="tel:8180012345678">+81 800 123 456 78</a></li>
                <li><i class="fas fa-star"></i> <a class="text-light" href="mailto:Collaxmail@gmail.com">Collaxmail@gmail.com</a></li>
            </ul>
        </div>
        <div class="tpoffcanvas__input d-none d-sm-block">
            <p class="text-light">Get UPdate</p>
            <form class="p-relative" action="{{route('newsletter')}}" method="post">
                @csrf
                <input type="text" name="email" placeholder="Enter mail">
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</div>

<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->

<main>
    @yield('content')

</main>


<!-- footer-area-start -->
<footer class="p-relative">
    <button class="scrollTop d-none d-md-block" data-target="html">
        <div class="tp-backto-top">
            <svg width="16" height=" 58" viewBox="00 16 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.70711 0.292892C8.31659 -0.0976295 7.68342 -0.0976296 7.2929 0.292892L0.928934 6.65685C0.53841 7.04738 0.53841 7.68054 0.928934 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41422L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 58L9 1L7 1L7 58L9 58Z"
                    fill="#292930" />
            </svg>
        </div>
    </button>
    <div class="footer-clip-shape">

    </div>
    <div class="tp-clip-height-one"></div>
    <div class="tp-clip-height-two"></div>
    <div class="tp-footer-area tp-footer-space black-bg p-relative fix pt-0">
        <div class="tp-footer-border-shape d-none"></div>
        <div class="tp-footer-border-shape-two"></div>
        <div class="circle-animation footer-animation d-none d-md-block">
            <span class="tp-circle-3"></span>
        </div>
        <div class="container">
            <div class="tp-footer-widget wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".5s">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                        <div class="tp-footer-top">
                            <h5 class="tp-footer-title">Let’s Talk About your Next Project

                                🤝</h5>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                        <div class="tp-footer-button text-start text-md-end">
                            <a class="tp-btn" href="{{route('contact')}}">Let’ Talk Online<i class="far fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

                    <div class="row  mt-25 text-light ">

                    <div class="col-xl-6 col-lg-5 col-md-6 col-12 ">
                     <a href="{{route('home')}}"><img src="{{asset('front/assets/img/motion round/')}}/{{$setting->logo}}" alt="" class="w-50 "></a>
                     <div class="tp-copyright-social text-start  mb-25 ">

                               @foreach($socials as $social)
                               <a href="{{$social->url}}"><i class="{{$social->icon}}"></i></a>
                               @endforeach
                           </div>

                    </div>


                        <div class="col-xl-3 col-lg-5 col-md-5 col-12 mt-25 ">
                            <ul>
                                <li><b>COMPANY</b></li>
                               <a href="#"> <li>HOW WE ARE</li></a>
                                <a href="#"><li>OUR WORKE</li></a>
                                <a href="#"><li>CLINTS</li></a>
                                <a href="#"><li>BLOG</li></a>
                                <a href="#"><li>FAQ</li></a>
                                <a href="#"><li>GET A QUOTE</li></a>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-md-5 col-12 mt-25">
                            <ul>
                               <a href="#"> <li><b>SERVICES</b></li></a>
                               <a href="#"> <li>EDUCATIONL VIDEOS</li></a>
                               <a href="#"> <li>COMMERCIAL VIDEOS</li></a>
                               <a href="#"> <li>SOCIAL MEDIA VIDEOS</li></a>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="tp-copyright-area pb-90 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
            <div class="container">
                <div class="tp-copyright-box align-items-center">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                            <div class="tp-copyright-text z-index-1">
                                <p class="m-0">© 2022 Creative Agency , All Right Receved.</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                            <div class="tp-copyright-right text-md-end text-start">
                                <a href="#">Privacy policy</a>
                                <a href="#">Tterms and conditions</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>
<!-- footer-area-end -->

<!-- backto-top-area-start -->
<button class="scroll-top scroll-to-target d-md-none" data-target="html">
    <i class="far fa-angle-double-up"></i>
</button>
<!-- backto-top-area-end -->


<!-- JS here -->
<script src="{{asset('front/assets/js/jquery.js')}}"></script>
<script src="{{asset('front/assets/js/waypoints.js')}}"></script>
<script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/assets/js/swiper-bundle.js')}}"></script>
<script src="{{asset('front/assets/js/slick.js')}}"></script>
<script src="{{asset('front/assets/js/magnific-popup.js')}}"></script>
<script src="{{asset('front/assets/js/counterup.js')}}"></script>
<script src="{{asset('front/assets/js/wow.js')}}"></script>
<script src="{{asset('front/assets/js/meanmenu.js')}}"></script>
<script src="{{asset('front/assets/js/isotope-pkgd.js')}}"></script>
<script src="{{asset('front/assets/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{asset('front/assets/js/ajax-form.js')}}"></script>
<script src="{{asset('front/assets/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@yield('script')
</body>


</html>
