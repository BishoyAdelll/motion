@extends('web.layouts.app')
@section('content')

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area  breadcrumb include-bg p-relative pt-160"
             data-background="/front/assets/img/breadcrum/ab-1.1.jpg">
        <div class="ac-about-shape-img">
            <img src="/front/assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">About Us</h3>
                        <a href="{{route('contact')}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    <!-- tp-about-area-start -->
    <div class="ac-about-content-area pt-130">
        <div class="container">
            <div class="ac-border-bottom ac-bottom-space">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 wow tpfadeLeft" data-wow-duration=".3s" data-wow-delay=".5s">
                        <div class="ac-about-left">
                            <h3 class="ac-ab-title"><a href="#">{{$about->title}}</a></h3>
{{--                            <div class="ac-play-button">--}}
{{--                                <a class="popup-video" href="https://www.youtube.com/watch?v=PVcUFCT0J0Q"><i class="far fa-play"></i></a>--}}
{{--                                <span>See Demo Video</span>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 wow tpfadeRight" data-wow-duration=".5s" data-wow-delay=".7s">
                        <div class="ac-about-right">
                            {!!$about->content!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-about-area-end -->

    <!--chose-area-start -->
    <div class="ac-chose-area mb-130">
        <div class="container ac-chose-bg">
            <div class="row">
                @foreach($cards as $key => $card)
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".5s">
                    <div class="tp-chose-item mb-30">
                        <div class="tpchosebox @if($key == 0) tpchosebox-three @elseif($key == 1) tpchosebox-two @else tpchosebox-one @endif ">
                            <div class="tpchosebox__icon fea-color-{{$key + 4}} mb-30">
                                <a href="#"><i class="{{$card->icon}}"></i></a>
                            </div>
                            <div class="tpchosebox__content">
                                <h4>{{$card->title}}</h4>
                                <p>{{$card->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
                    <div class="tp-chose-item mb-30">
                        <div class="tpchosebox tpchosebox-three">
                            <div class="tpchosebox__icon fea-color-5 mb-30">
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <div class="tpchosebox__content">
                                <h4><a href="service-details.html">Competitive <br>
                                        Rate</a></h4>
                                <p>100% Client Satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                    <div class="tp-chose-item mb-30">
                        <div class="tpchosebox tpchosebox-two">
                            <div class="tpchosebox__icon fea-color-4 mb-30">
                                <a href="#"><i class="flaticon-web"></i></a>
                            </div>
                            <div class="tpchosebox__content">
                                <h4><a href="service-details.html">Cretified <br>
                                        Globally</a></h4>
                                <p>65.04 k Reach</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                    <div class="tp-chose-item mb-30">
                        <div class="tpchosebox">
                            <div class="tpchosebox__icon mb-30">
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <div class="tpchosebox__content">
                                <h4><a href="service-details.html">Competitive <br> Rate</a></h4>
                                <p>100% Client Satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--chose-area-end -->

    <!-- tp-feature-area-start -->
{{--    <div class="ac-feature-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row ac-feature-space">--}}
{{--                <div class="col-xl-6 col-lg-6">--}}
{{--                    <div class="ac-feature-left">--}}
{{--                        <h3 class="ac-feature-title">Creating world class experiences</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-6 col-lg-6">--}}
{{--                    <div class="ac-feature-right">--}}
{{--                        <p class="pb-25">Collax builds digital products that let people do things differently. Share your--}}
{{--                            challenge with our team, and we’ll work with you to deliver a revolutionary digital product. Our--}}
{{--                            clients have changed the way people do banking, listen to music.</p>--}}
{{--                        <p>learn languages, and rent bikes. Their products have been featured in TechCrunch, Business--}}
{{--                            Insider, and Product Hunt</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="ac-feature-border-top">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-6">--}}
{{--                        <div class="acfeature mb-50">--}}
{{--                            <div class="ac-circle"></div>--}}
{{--                            <div class="acfeature__item">--}}
{{--                                <h3 class="ac-feature-sm-title"><a href="about-me.html">Project kikoff</a></h3>--}}
{{--                                <p>At collax we specialize designing building, shipping...</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-6">--}}
{{--                        <div class="acfeature mb-50">--}}
{{--                            <div class="ac-circle ac-cirle-color-2"></div>--}}
{{--                            <div class="acfeature__item">--}}
{{--                                <h3 class="ac-feature-sm-title ac-cirle-color-2"><a href="about-me.html">PIdeation</a></h3>--}}
{{--                                <p>At collax we specialize designing building, shipping...</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-6">--}}
{{--                        <div class="acfeature mb-50">--}}
{{--                            <div class="ac-circle ac-cirle-color-3"></div>--}}
{{--                            <div class="acfeature__item">--}}
{{--                                <h3 class="ac-feature-sm-title ac-cirle-color-3"><a href="about-me.html">Design Process</a></h3>--}}
{{--                                <p>At collax we specialize designing building, shipping...</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-lg-3 col-md-6">--}}
{{--                        <div class="acfeature mb-50">--}}
{{--                            <div class="ac-circle ac-cirle-color-4"></div>--}}
{{--                            <div class="acfeature__item">--}}
{{--                                <h3 class="ac-feature-sm-title ac-cirle-color-4"><a href="about-me.html">Development</a></h3>--}}
{{--                                <p>At collax we specialize designing building, shipping...</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- tp-feature-area-end -->

    <!--team-area-start -->
{{--    <div class="ac-team-area pt-130 pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="ac-team-title-section text-center mb-60">--}}
{{--                        <h3 class="ac-team-title">People are the key to success</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($teams as $team)--}}
{{--                <div class="col-xl-3 col-lg-3 col-md-6 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".5s">--}}
{{--                    <div class="tpteam mb-30">--}}
{{--                        <div class="tpteam__shape-1">--}}
{{--                            <img src="assets/img/team/team-shape-5.1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="tpteam__shape-2">--}}
{{--                            <img src="assets/img/team/team-shape-5.2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="tpteam__thumb">--}}
{{--                            <img class="w-100" src="front/assets/img/team/{{$team->image}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="tpteam__content">--}}
{{--                            <h4 class="tp-team-sm-title">{{$team->name}}</h4>--}}
{{--                            <h5 class="tp-team-sm-subtitle">{{$team->job_title}}</h5>--}}
{{--                            <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                            <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            <a href="#"><i class="fab fa-skype"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- team-area-end -->

    <!-- news-area-start -->
    <div class="tp-news-letter-area tp-news-letter-bg pt-65 pb-60" data-background="/front/assets/img/news/news-bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-12 ">
                    <div class="tp-news-sub-wrapper pr-50">
                        <div class="tp-news-letter-section-box">
                            <h5 class="tp-subtitle subtitle-secondary-color wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">Join the Team</h5>
                            <h5 class="tp-title-sm tp-title-sm tp-white-text pb-25 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">No matter what part of the world you are in, our door is always open for
                                collaboration. We believe that talented people are the main ingredient for
                                providing value.
                            </h5>
                        </div>
                        <div class="tp-news-button wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                            <a class="tp-btn-lg-yellow mr-20" href="{{route('contact')}}">Become a Partner</a>
{{--                            <a class="tp-btn-sky" href="about-me.html">Press Office</a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 wow tpfadeRight" data-wow-duration=".5s" data-wow-delay=".8s">
                    <div class="tp-news-letter-img text-md-start text-lg-end pr-45">
                        <img src="assets/img/news/news-7.1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- news-area-end -->

@endsection
