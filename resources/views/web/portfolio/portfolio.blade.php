@extends('web.layouts.app')

@section('style')
    <style>
        .pagination{
            bottom: 0;
            position: absolute;
        }
    </style>
@endsection

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area  breadcrumb include-bg p-relative pt-160"
             data-background="front/assets/img/breadcrum/ab-1.1.jpg">
        <div class="ac-about-shape-img z-index-1">
           <img src="front/assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Portfolio</h3>
                        <a href="{{route('contact')}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- project-area-start -->
    <div class="tp-project-area pt-120 pb-120 p-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-section-box-two text-center">
                        <h5 class="tp-subtitle">Complete Project</h5>
                        <h2 class="tp-title">Creative work.</h2>
                    </div>
                </div>
            </div>

            <div class="row grid gx-45">
                @foreach($projects as $project)
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4  grid-item cat1 cat3" >
                    <div class="tp-project-item-two p-relative mb-45 fix">

                        <a href="{{route('singlePortfolio',$project-> id)}}">
                        <div class="portfolio-thumb fix">
                            <img class=" w-100" src="front/assets/img/project/{{$project->image}}" alt="" style="min-height: 23rem; max-height: 23rem" >
                        </div>
                        <div class="tp-portfolio-content-box">
                            <h3 class="portfolio-animation-title"><a href="{{route('singlePortfolio',$project-> id)}}">{{$project-> title}}</a></h3>
                            <span>{{$project-> subtitle}}</span>
                        </div>
                        <div class="portfolio-animation-icon">
                            <a class="popup-image" href="assets/img/portfolio/port-11.jpg">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0840454 35.6872L4.24586 39.8578C4.43505 40.0474 5.57016 40.0474 5.75926 39.8578L29.9737 16.1611C30.352 15.7819 30.7304 15.5923 31.2979 15.5923C31.4871 15.5923 31.8655 15.5923 32.0546 15.7819C32.8113 15.9715 33.1896 16.7298 33.1896 17.488V29.4313V29.6209H39.2433C39.6216 29.6209 39.8109 29.6209 40 29.6209V0.616144C40 0.616144 40 0.616144 39.6217 0.23695C39.2434 -0.142245 39.4326 0.047446 39.0541 0.047446H10.6779C10.6779 0.23695 10.6779 0.426547 10.6779 0.995338V6.87201C10.6779 7.25111 10.6779 7.6303 10.6779 7.6303H22.7851C23.5418 7.6303 24.2985 8.0094 24.4876 8.7677C24.8659 9.52599 24.6768 10.2843 24.1093 10.8531L0.462448 34.3602C0.273251 34.5498 0.0840454 34.7394 0.0840454 35.1185C-0.105061 35.4976 0.0840454 35.4976 0.0840454 35.6872Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>

                        </a>
                    </div>
                </div>
                @endforeach
                    {{$projects->links("pagination::bootstrap-4")}}

            </div>

        </div>
    </div>
    <!-- project-area-end -->

@endsection
