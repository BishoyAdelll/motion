@extends('web.layouts.app')
@section('content')
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
                    <h3 class="breadcrumb__title">Service Details</h3>
                    <a href="about.html" class="tp-btn-white-border">Lets work together <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->


<!-- service-details- area- start -->
<div class="service-details-area">
    <div class="container">
        <div class="row service-pt-pb">
            <div class="col-xl-6 col-lg-6">
                <div class="sd-service-details">
                    <h3 class="tp-title-sm service-details-space">{{$service->title}}</h3>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="sd-service-details-paragraph">
                    <p class="pb-15">{{$service->subtitle}}</p>
{{--                    <p class="pb-10">Design services range from research and product review to ideation, UX design, and--}}
{{--                        user testing.</p>--}}
{{--                    <p>A dedicated product design team can help you achieve your business goals. Whether you need to--}}
{{--                        craft an idea for a completely new product or elevate the quality of an existing solution, we’ll--}}
{{--                        help you to create a product that is laser targeted to your users’ needs and delivers business--}}
{{--                        results</p>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="sd-big-img">
                    <img src="/front/assets/img/service/{{$service->image}}" alt="">
                </div>
            </div>
{{--            <div class="col-xl-6 col-lg-6">--}}
{{--                <div class="sd-service-details">--}}
{{--                    <h3 class="tp-title-sm service-details-space">Design process based on best practices and--}}
{{--                        methodologies that deliver</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xl-6 col-lg-6">
                <div class="sd-service-details-paragraph">
                    <p class="pb-15">{{$service->content}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- service-details-area- end -->


@endsection
