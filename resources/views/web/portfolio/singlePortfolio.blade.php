@extends('web.layouts.app')
@section('content')
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative"
                 data-background="/front/assets/img/breadcrum/ab-1.1.jpg">
            <div class="ac-about-shape-img z-index-1">
                <img src="/front/assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">Case Details</h3>
                            <a href="contact.html" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- case-details- area- start -->
        <div class="cd-banner-area pt-110 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cd-banner-img">
                            <img src="/front/assets/img/project/{{$project->image}}" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- case-details-area- end -->

{{--        <!-- project-info- area- start -->--}}
{{--        <div class="cd-project-info-area pb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="cd-project-wrapper">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">--}}
{{--                            <div class="cd-project-info-box">--}}
{{--                                <h4 class="cd-case-title">About this project </h4>--}}
{{--                                <p>A dedicated product design team can help you achieve your business goals. Whether you need to--}}
{{--                                    craft an idea for a completely new product or elevate the quality of an existing solution,--}}
{{--                                    we’ll help you to create a product that is laser targeted to your users’ needs and delivers--}}
{{--                                    business results.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">--}}
{{--                            <div class="cd-client-details">--}}
{{--                                <p><span>Client :</span> Rasalina De Willam (USA)</p>--}}
{{--                                <p><span>Date :</span> March 21, 2020</p>--}}
{{--                                <p><span>Category :</span> Technology</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">--}}
{{--                            <div class="cd-social-icon">--}}
{{--                                <a class="cd-si-color-1" href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="cd-si-color-2" href="#"><i class="fab fa-pinterest-p"></i></a>--}}
{{--                                <a class="cd-si-color-3" href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- project-info-area- end -->--}}


        <!-- introduce-area-start -->
        <div class="cd-introduce-area pb-80 ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cd-info-box">
                            <h3 class="tp-title-sm pb-30">{{$project->title}}</h3>
{{--                            <p>{{$project->content}}</p>--}}
                            <p class="mb-25">One in four people in the world will be affected by mental or neurological disorders at some point in their lives, says the World Health Organization. Still, we spend more time brushing our teeth than taking care of our mental health, said Guy Winch in his TED talk.
                            </p>
                            <p class="mb-25">We tend to neglect our mental well-being because of the stigma of mental health care. But as societies become wiser and more self-aware, there is a greater need to redefine the meaning of mental health care. Naomi Hirabayashi and Marah Lidey do exactly that by drawing attention to the aspect of preventing mental health issues. The application they built makes mental self-care easy and accessible. of this year of the best law and his a part of this years.</p>
                            <p>We tend to neglect our mental well-being because of the stigma of mental health care. But as societies become wiser and more self-aware, there is a greater need to redefine the meaning of mental health care. Naomi Hirabayashi and Marah Lidey do exactly that by drawing attention to the aspect of preventing mental health issues. The application they built makes mental self-care easy and accessible. of this year of the best law and his a part of this years.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  introduce-area- end -->

        <!-- case-details- area- start -->
{{--        <div class="cd-banner-area pb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="cd-banner-img">--}}
{{--                            <img src="assets/img/case/case-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- case-details-area- end -->

        <!-- introduce-area-start -->
        <div class="cd-introduce-area pb-80 ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cd-info-box">
                            <h3 class="tp-title-sm pb-30">Final solution</h3>
                            <p class="mb-25">One in four people in the world will be affected by mental or neurological disorders at some point in their lives, says the World Health Organization. Still, we spend more time brushing our teeth than taking care of our mental health, said Guy Winch in his TED talk.
                            </p>
                            <p class="mb-25">We tend to neglect our mental well-being because of the stigma of mental health care. But as societies become wiser and more self-aware, there is a greater need to redefine the meaning of mental health care. Naomi Hirabayashi and Marah Lidey do exactly that by drawing attention to the aspect of preventing mental health issues. The application they built makes mental self-care easy and accessible. of this year of the best law and his a part of this years.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  introduce-area- end -->


        <!-- news-area-start -->
        <div class="tp-news-letter-area tp-news-letter-bg pt-200 pb-150" data-background="/front/assets/img/news/news-bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-12 ">
                        <div class="tp-news-sub-wrapper text-center">
                            <div class="tp-news-letter-section-box">
                                <h2 class="tp-title-sm tp-title-sm tp-white-text pb-30">Launch your product with us</h2>
                                <p class="text-white pb-35">We had the pleasure of being a partner for companies from markets like Fintech, Health, Government, Security, Big Data & many more.</p>
                            </div>
                            <div class="tp-news-button">
                                <a class="tp-btn-lg-yellow" href="contact.html">Become a Partner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- news-area-end -->


    </main>
    @endsection
