@extends('web.layouts.app')
@section('content')
    <main>

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
                            <h3 class="breadcrumb__title">Services</h3>
                            <a href="{{route('contact')}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->


        <div class="tp-service-area pt-190 pb-100 grey-bg p-relative fix">
            <div class="tp-sv-shape-img z-index-1">
                <img src="front/assets/img/service/service-shape.png" alt="">
            </div>
            <div class="circle-animation service">
                <span class="tp-circle-1"></span>
                <span class="tp-circle-2"></span>
            </div>
            <div class="circle-animation service-two">
                <span class="tp-circle-skye"></span>
            </div>
            <div class="container">
                <div class="row">
                    @foreach( $services as $service)
                        <div class="col-lg-6 col-md-12 col-12 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                            <div class="tp-sv-box">
                                <div class="tp-service-item sv-2-border d-flex mb-30">
                                    <div class="tp-sv-img">
                                        <img src="/front/assets/img/service/{{$service->icon}}" alt="">
                                    </div>
                                    <div class="tp-sv-content pl-60">
                                        <h3 class=" tp-sv-title mb-35"><a href="{{route('singleService',$service->id)}}">{{$service->title}}</a></h3>
                                        <p class="mb-30">{{$service->subtitle}}</p>

                                        <div class="tp-sv-link mt-35">
                                            <a href="{{route('singleService',$service->id)}}"><i class="far fa-arrow-right"></i> Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
{{--                    @foreach($services as $key => $service)--}}
{{--                        <div class="@if($key == 3) col-lg-12 @else col-lg-6 @endif col-md-12 col-12">--}}
{{--                            <div class="tp-sv-box  wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">--}}
{{--                                <div class="tp-service-item d-flex mb-30">--}}
{{--                                    <div class="tp-sv-img">--}}
{{--                                        <img src="front/assets/img/service/{{$service->icon}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="tp-sv-content pl-60">--}}
{{--                                        <h3 class=" tp-sv-title mb-35"><a href="service-details.html">{{$service->title}}</a></h3>--}}
{{--                                        <p class="mb-30">{{$service->subtitle}}</p>--}}
{{--                                        <div class="tp-sv-link mt-35">--}}
{{--                                            <a href="#"><i class="far fa-arrow-right"></i> Learn More</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>
            </div>
        </div>

        <!-- news-area-start -->
        <div class="tp-news-letter-area tp-news-letter-bg pt-65 pb-60" data-background="/front/assets/img/news/news-bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-12 wow tpfadeLeft" data-wow-duration=".3s" data-wow-delay=".6s">
                        <div class="tp-news-sub-wrapper pr-50">
                            <div class="tp-news-letter-section-box">
                                <h5 class="tp-subtitle subtitle-secondary-color">Get every update</h5>
                                <h2 class="tp-title-sm tp-title-sm tp-white-text pb-25">A recognizable & awarded partner..
                                    become our partner
                                </h2>
                            </div>
                            <div class="tp-news-button">
                                <a class="tp-btn-lg-yellow mr-20" href="#">Become a Partner</a>
                                <a class="tp-btn-sky" href="#">Press Office</a>
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


    </main>
@endsection
