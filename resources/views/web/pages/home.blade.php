@extends('web.layouts.app')
@section('content')
{{--    inline style start--}}
<style>

    .form{

        padding: 4rem 4rem;
        border-radius: 0.5rem;
        transition:0.3s;
        margin: 40px auto;

    }
    .form:hover{
        box-shadow:0 5px 20px gray;
    }
    .form--div{
        display:flex;
        justify-content: center;
        align-items: center;
        position:relative;
        height:60px;
        margin: 1.5rem 0px;
        padding-top:70px;
    }
    .form--input{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        border:1px solid #a9a8a8;
        outline: none;
        padding:1rem;
        background:none;
        z-index: 1;

    }
    .form--label{
        position: absolute;
        left: 1rem;
        top: 1rem;
        padding: 0 0.25rem;
        background-color: #fff;
        color:#333;
        font-size:1.3rem;
        transition: 0.3s;

    }
    .form--input:focus + .form--label{
        top:-.5rem;
        left:.8rem;
        color: gray;
        font-size: small;
        font-weight: 500;
        z-index:10;

    }
    .form--input:not(:placeholder-shown).form--input:not(:focus)+.form--label{
        top:-.5rem;
        left:.8rem;
        color:gray;
        font-size: small;
        font-weight: 500;
        z-index:10;
    }
    .form--input:focus{
        border:1.5px solid #fa2;
    }
</style>

{{--inline style end--}}









    <!-- tp-hero-area-start -->
    <div class="tp-hero-area tp-hero-space p-relative z-index-1 fix">
        <div class="tp-hero-shape">
            <div class="shape-circle-yellow d-none"></div>
            <div class="shape-circle-blue"></div>
            <div class="shape-one"><img src="front/assets/img/hero/{{$hero->image}}" alt=""></div>
        </div>
        <div class="tp-hero-wapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-hero-content">
                            <div class="tp-hero-text">
                                <h2 class="tp-hero-title wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">{{$hero->title}}</h2>
                                <p class="wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">{{$hero->subtitle}}</p>
                                <div class="tp-hero-button mb-140 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                                    <a class="tp-btn mr-30" href="{{$hero->button1URL}}">{{$hero->button1Title}}</a>
                                    <a class="tp-btn-grey" href="{{$hero->button2URL}}">{{$hero->button2Title}} <i class="far fa-arrow-right"></i></a>
                                </div>
                                <div class="tp-hero-social pb-30 wow tpfadeIn " data-wow-duration=".7s" data-wow-delay="1.2s" >
                                    <div class="tp-hero-social bp-hero-social ">
                                        @foreach($socials as $key => $social)
                                        <a class="social-icon-1" href="{{$social->url}}">
                                            <i class="{{$social->icon}}"></i><span>{{$social->title}}</span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="tp-hero-big-img wow fadeInRight"  data-wow-duration=".7s" data-wow-delay="1.2s">
                            <img src="front/assets/img/hero/hero-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-hero-area-end -->

    <!--creative-area-start -->
    <div class="p-relative">

        <div class="tp-creative-area p-relative black-bg pt-140 pb-135 fix">
            <div class="circle-animation testimonial">
                <span class="tp-circle-1"></span>
                <span class="tp-circle-2"></span>
            </div>
            <div class="creative-shape-img">
                <img src="front/assets/img/creative/creative-hand.png" alt="">
            </div>
            <div class="creative-shape-img-2">
                <img src="front/assets/img/creative/creative-circle-img.png" alt="">
            </div>
            <div class="container creative-z-index ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-creative-box text-center">
                            <div class="tp-creative-content mb-110 py-5">
                                <h4 class="tp-creative-title">{{ $creative->content }}</h4>
                            </div>
                            <div class="tp-play-button mb-150">
                                <a class="popup-video" href="{{$creative->video_id }}"><i
                                        class="fal fa-play"></i></a>
                                <span>{{$creative->video_title}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="creative-box pl-40 pr-40">
                    <div class="row gx-5  justify-content-evenly">
                        <div class="col-lg-4 col-md-12 col-xs-12 mb-30">
                            <div class="tp-creative-item wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                                <div class="tp-creative d-flex align-items-center">
                                    <div class="tp-creative-icon mr-35">
                                        <i class="{{$creative->first_card_icon}}"></i>
                                    </div>
                                    <div class="counter-text">
                                        <span>{{$creative->first_card_title}}</span>
                                        <p class="m-0">{{$creative->first_card_subtitle}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12 mb-30">
                            <div class="tp-creative-item tp-creative-blue wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">
                                <div class="tp-creative-yellow d-flex align-items-center">
                                    <div class="tp-creative-icon mr-35">
                                        <i class="{{$creative->second_card_icon}}"></i>
                                    </div>
                                    <div class="counter-text">
                                        <span>{{$creative->second_card_title}}</span>
                                        <p class="m-0">{{$creative->second_card_subtitle}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--creative-area-end -->

    <!--bran-area start -->
    <div class="tp-brand-area pt-135 grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-brand-section text-center pb-60">
                        <h4 class="tp-brand-title">We are Already Build Solution for...</h4>
                    </div>
                </div>
            </div>
            <div class="tp-brand-slider-section">
                <div class="swiper-container brand-slider-active">
                    <div class="swiper-wrapper d-flex align-items-center">
                        @foreach($clients as $client)
                        <div class="swiper-slide">
                            <div class="tp-brand-icon text-center">
                                <img src="front/assets/img/brand/{{$client->image}}" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--bran-area end -->

    <!-- service-area-start -->
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
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="tp-service-section-box mb-30 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                        <h5 class="tp-subtitle pb-10">{{$services_section->title}}</h5>
                        <h2 class="tp-title">{{$services_section->subtitle}} </h2>
                        <a class="tp-btn" href="{{$services_section->button_url}}">{{$services_section->button_title}}</a>
                    </div>
                </div>
                @foreach($services as $key => $service)
                <div class="@if($key == 3) col-lg-12 @else col-lg-6 @endif col-md-12 col-12">
                    <div class="tp-sv-box  wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">
                        <div class="tp-service-item d-flex mb-30">
                            <div class="tp-sv-img">
                                <img src="front/assets/img/service/{{$service->icon}}" alt="">
                            </div>
                            <div class="tp-sv-content pl-60">
                                <h3 class=" tp-sv-title mb-35"><a href="service-details.html">{{$service->title}}</a></h3>
                                <p class="mb-30">{{$service->subtitle}}</p>
                                <div class="tp-sv-link mt-35">
                                    <a href="#"><i class="far fa-arrow-right"></i> Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service-area-end -->

    <!-- project-area-start -->
    <div class="tp-project-area p-relative pt-100 pb-90">
{{--        <div class="tp-project-shape">--}}
{{--            <img src="front/assets/img/motion round/element.png" alt="">--}}
{{--        </div>--}}
        <div class="container">
            <div class="row align-items-center mb-15">
                <div class="col-xl-5 col-lg-12 col-md-12">
                    <div class="tp-project-section-box">
                        <h5 class="tp-subtitle">Our Project</h5>
                        <h2 class="tp-title">Creative work. </h2>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12">
                    <div class="tp-service-tab-button">
{{--                        <nav>--}}
{{--                            <div class="nav tp-service-tab justify-content-xl-end justify-content-lg-center" id="nav-tab"--}}
{{--                                 role="tablist">--}}
{{--                                <button class="nav-links mb-10" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#all"--}}
{{--                                        type="button" role="tab" aria-controls="all" aria-selected="true">All</button>--}}

{{--                                <button class="nav-links mb-10" id="nav-design-tab" data-bs-toggle="tab"--}}
{{--                                        data-bs-target="#design" type="button" role="tab" aria-controls="design"--}}
{{--                                        aria-selected="true">Website Design</button>--}}

{{--                                <button class="nav-links active mb-10" id="nav-branding-tab" data-bs-toggle="tab"--}}
{{--                                        data-bs-target="#branding" type="button" role="tab" aria-controls="branding"--}}
{{--                                        aria-selected="true">Branding Design--}}
{{--                                </button>--}}

{{--                                <button class="nav-links mb-10" id="nav-app-tab" data-bs-toggle="tab" data-bs-target="#app"--}}
{{--                                        type="button" role="tab" aria-controls="app" aria-selected="true">App Design</button>--}}
{{--                            </div>--}}
{{--                        </nav>--}}
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                    <div class="project-tab-main">
                        <div class="row gx-1  ">
                            <div class="col-xl-12 col-lg-12">
                                <div class="row">
                                    @foreach($projects as $project)
                                    <div class=" col-xl-6 col-lg-6">
                                        <div class="tp-project-box-sm d-flex align-items-center mb-20">
                                            <div class="tp-project-sm-img fix ml-25 mr-35">
                                                <img src="front/assets/img/project/{{$project->image}}" alt="">
                                            </div>
                                            <div class="tp-project-sm-content">
                                                <h3 class="pro-sm-title"><a href="{{$project->url}}">{{$project->title}}</a></h3>
                                                <p>{{$project->subtitle}}</p>
                                                <a class="tp-btn-white-sm" href="{{$project->url}}">Case Studies <i
                                                        class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project-area-end -->

    <!-- testimonial-area start-->
    <div class="tp-testimonial-area black-bg pt-130 pb-130 fix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-testimonial-section-box text-center pb-25">
                        <h5 class="tp-subtitle">Client Testimonial</h5>
                        <h2 class="tp-title tp-white-text">Customer feedback</h2>
                    </div>
                </div>
            </div>
            <div class="tp-testimonial-slider-section d-flex justify-content-center mb-50">
                <div class="swiper-container testimonial-slider-active">
                    <div class="swiper-wrapper">
                        @foreach($feedbacks as $key => $feedback)
                            @if($key % 2 == 0)
                        <div class="swiper-slide">
                            <div class="tp-testimonial-item">
                                <div class="tp-testi-meta d-flex justify-content-between mb-40">
                                    <div class="tp-testi-icon-box d-flex align-items-center">
                                        <div class="tp-testi-img mr-20"><img src="front/assets/img/testimonial/{{$feedback->image}}" alt="">
                                        </div>
                                        <div class="tp-testi-client-position">
                                            <h3>{{$feedback->name}}</h3>
                                            <h6>{{$feedback->job_title}}</h6>
                                        </div>
                                    </div>
                                    <div class="tp-testi-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="tp-testi-p-text">
                                    <p>{{$feedback->content}}</p>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tp-testimonial-slider-section-2 d-flex justify-content-center">
                <div class="swiper-container testimonial-slider-active-2">
                    <div class="swiper-wrapper">
                        @foreach($feedbacks as $key => $feedback)
                            @if($key % 2 != 0)
                                <div class="swiper-slide">
                                    <div class="tp-testimonial-item">
                                        <div class="tp-testi-meta d-flex justify-content-between mb-40">
                                            <div class="tp-testi-icon-box d-flex align-items-center">
                                                <div class="tp-testi-img mr-20"><img src="front/assets/img/testimonial/{{$feedback->image}}" alt="">
                                                </div>
                                                <div class="tp-testi-client-position">
                                                    <h3>{{$feedback->name}}</h3>
                                                    <h6>{{$feedback->job_title}}</h6>
                                                </div>
                                            </div>
                                            <div class="tp-testi-ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="tp-testi-p-text">
                                            <p>{{$feedback->content}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->

    <!-- blog-area-start -->
    <div class="tp-blog-area pt-130 pb-120 p-relative">
        <div class="circle-animation blog-animation">
            <span class="tp-circle-3"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-blog-section-box text-center pb-15">
                        <h5 class="tp-subtitle">Blog & Article</h5>
                        <h2 class="tp-title">Recent blog post</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-40">
                @foreach($blogs as $blog)
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-blog-box mb-30 wow tpfadeLeft" data-wow-duration=".6s" data-wow-delay=".4s">
                        <div class="tp-blog-item">
                            <div class="tp-blog-img fix mb-35">
                                <a href="#"> <img class="w-100" src="front/assets/img/blog/{{$blog->image}}" alt=""></a>
                            </div>
                            <div class="tp-blog-meta d-flex justify-content-between mb-30">
                                <a href="#">{{$blog->author}}</a>
{{--                                <a class="tp-blog-meta-color" href="#">February. 20.2022</a>--}}
                            </div>
                            <div class="tp-blog-info">
                                <h3 class="tp-blog-title"><a href="blog-details.html">{{$blog->title}}</a>
                                </h3>
                                <p>{{$blog->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-blog-button text-center mt-30">
                        <a class="tp-btn" href="#">View Case Studies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area-end -->

    <!-- news-letter-area-start -->
    <div class="tp-news-letter-area pb-140 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".4s">
        <div class="container">
            <div class="tp-news-letter-box p-relative" data-background="front/assets/img/news/news-shape.png">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-12  ">
                        <div class="tp-news-wrapper pl-90 z-index-1">
                            <div class="tp-news-letter-section-box">
                                <h5 class="tp-subtitle subtitle-secondary-color">Get update</h5>
                                <h2 class="tp-title tp-white-text">Get latest updates and deals</h2>
                            </div>
                            <div class="tp-news-button p-relative">
                                <form action="{{route('newsletter')}}" method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="Enter your mail" required>
                                    <button class="tp-submit-button tp-btn-yellow-semilar" type="submit">Subscribe <i
                                            class="far fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 text-lg-end col-md-4  ">
                        <div class="tp-news-letter-img">
                            <img src="front/assets/img/news/news-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="tp-news-shape-img">
                    <img src="front/assets/img/news/news-shape-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- news-letter-area-end -->
    {{--form start --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="text-dark ">
                   <h1><strong>Say Hello </strong>👋</h1>
                   <h4 class="lh-lg text-gray-800">We are a leader video Agency that connects brands and people through <b>customized video Content.</b>
                  We are trusted by brands worldwide. providing video content services from small startups to fortune 500 companies
                       whatever your challenge. we would love to discuss it.</h4>
               </div>
                <div class="tp-copyright-social text-center  mt-60">
                    @foreach($socials as $social)
                        <a href="{{$social->url}} " class="bg-dark"><i class="{{$social->icon}}"></i></a>
                    @endforeach
                </div>

                <form action="{{route('sayHello')}}" method="POST" class="form ">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message= Session::get('success'))
                        <div class="alert alert-success">
                            <p> {{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-12 ">
                            <div class="form--div">
                                <input type="text" name="f_name" class="form--input" placeholder=" ">
                                <label class="form--label">Type your first name</label>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-8 col-12 ">
                            <div class="form--div">
                                <input type="text" name="l_name" class="form--input" placeholder=" ">
                                <label class="form--label">Type your last name</label>
                            </div>
                        </div>
                        <div class="form--div">
                            <input type="text" name="email" class="form--input" placeholder=" ">
                            <label class="form--label">Type your email</label>
                        </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-12 ">
                        <div class="form--div">
                        <select class="form--input" placeholder=" " name="position">
                            <option value="manager">manager</option>
                            <option value="assistant">assistant</option>
                            <option value="teamLeader">team Leader</option>
                        </select>
                            <label class="form--label">JOB POSITION</label>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-8 col-12 ">
                        <div class="form--div">
                            <input type="date" name="date" class="form--input" placeholder=" ">
                            <label class="form--label">DEADLINE TIME</label>
                        </div>

                    </div>

                        <div class="col-xl-6 col-lg-6 col-md-8 col-12 ">
                            <div class="form--div">
                                <select class="form--input" placeholder=" " name="budget">
                                    <option value="open">open</option>
                                    <option value="close">close</option>
                                    <option value="specific">specific</option>
                                </select>
                                <label class="form--label">BUDGET</label>
                            </div>
                        </div>
                   <div class="col-xl-6 col-lg-6 col-md-8 col-12 ">
                       <div class="form--div">
                           <select class="form--input" placeholder=" " name="business">
                               <option value="commercial">commercial</option>
                               <option value="industrial">industrial</option>
                               <option value="marketing">marketing</option>
                           </select>
                           <label class="form--label ">TYPE OF BUSINESS</label>
                       </div>

                   </div>
                        <div class="form--div ">
                            <select class="form--input" placeholder=" " name="industry">
                                <option value="allProject">all Project</option>
                                <option value="onePart">one Part</option>
                                <option value="specific Part">specific Part</option>
                            </select>
                            <label class="form--label">INDUSTRY</label>
                        </div>

                    <h4>What do you need?(select one or more )</h4>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" value="VIDEO PRODUCTION" name="brands[]">
                                <label class="form-check-label" for="gridCheck1">  VIDEO PRODUCTION</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2" value="BRANDING" name="brands[]">
                                <label class="form-check-label" for="gridCheck2">
                                    BRANDING
                                </label>
                            </div>
                        </div>
                        <div class="form--div">
                            <textarea name="comments" id="" cols="30" rows="10" placeholder="" class="form--input"></textarea>
                            <label class="form--label">comments</label>
                        </div>
                        <div class="form--div">
                            <input type="text" name="about" class="form--input" placeholder=" ">
                            <label class="form--label">HOW DID YOU FIND ABOUT US</label>
                        </div>


                    </div>
                    <div class="tp-hero-button mb-20 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                        <button class="tp-btn-grey mr-30" type="submit">GET A QUOTE</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--form end --}}
@endsection
