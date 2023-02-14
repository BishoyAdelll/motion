@extends('web.layouts.app')
@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area  breadcrumb include-bg p-relative pt-160"
             data-background="/front/assets/img/breadcrum/ab-1.1.jpg">
        <div class="ac-about-shape-img z-index-1">
            <img src="/front/assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Blog & Article</h3>
                        <a href="{{route('contact')}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    <!-- postbox area start -->
    <div class="postbox__area pt-120 pb-120">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-xxl-6 col-xl-6 col-lg-6 ">

                    <div class="postbox__wrapper pr-20">
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__thumb w-img">
                                <a href="{{route('singleBlog',$blog->id)}}">
                                    <img src="/front/assets/img/blog/{{$blog->image}}" alt="">
                                </a>
                            </div>
                            <div class="postbox__content">
                                <div class="postbox__meta">
                                    <span><a href="#"><i class="fal fa-user-circle"></i> Alextina </a></span>
                                    <span><a href="#"><i class="fal fa-clock"></i> Dec 28, 2022</a></span>
                                    <span><a href="#"><i class="fal fa-comment-alt-lines"></i>(04) Coments</a></span>
                                    <span><a href="#"><i class="fal fa-eye"></i> 1,526 views</a></span>
                                </div>
                                <h3 class="postbox__title">
                                    <a href="{{route('singleBlog',$blog->id)}}">{{$blog->title}}</a>
                                </h3>
                                <div class="postbox__text">
                                    <p>{{$blog->subtitle}}</p>
                                </div>
                                <div class="post__button">
                                    <a class="tp-btn-yellow" href="{{route('singleBlog',$blog->id)}}"> READ MORE</a>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
                @endforeach
                {{$blogs->links("pagination::bootstrap-4")}}
            </div>


        </div>
    </div>
    <!-- postbox area end -->
@endsection
