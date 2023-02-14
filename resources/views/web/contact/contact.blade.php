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
                        <h3 class="breadcrumb__title">Contact Us</h3>
{{--                        <a href="{{route('contact')}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    <!--contact-area-start -->
    <div class="tp-contact-area pt-135 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 ">
                    <div class="tp-contct-wrapper contact-space-40">
                        <div class="tp-contact-thumb mb-60">
                            <img src="/front/assets/img/contact/contact-1.jpg" alt="">
                        </div>
                        <div class="tp-contact-info mb-40">
                            <h4 class="contact-title">Mail Address</h4>
                            <span><a href="mailto:(webmail@gmail.com)">{{$setting->site_email}}</a></span>
                        </div>
                        <div class="tp-contact-info mb-40">
                            <h4 class="contact-title">Phone Number</h4>
                            <span><a href="tel:(+1255-568-6523)">{{$setting->site_phone}}</a></span>
                        </div>
                        <div class="tp-contact-info">
                            <h4 class="contact-title">Address line</h4>
                            <span><a href="https://www.google.com/maps" target="blank">{{$setting->site_address}}</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tpcontact">
                        <h4 class="tp-contact-big-title">Let’s Talk...</h4>
                        <div class="tpcontact__form tpcontact__form-3">
                            <form id="contact-form" action="{{route('ContactForm')}}" method="POST">
                                @csrf
                                <input name="name" type="text" placeholder="Enter your Name">
                                <input name="phone" type="text" placeholder="Enter your phone">
                                <input name="email" type="email" placeholder="Enter your Mail">
                                <input name="service" type="text" placeholder="Enter your service">
                                <textarea name="message" placeholder="Enter your Massage"></textarea>

                            <button type="submit" class="tp-btn-yellow">Send Massage</button>
                            </form>
                        </div>
{{--                        <p class="ajax-response"></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->
@endsection
