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
                        <h3 class="breadcrumb__title">{{$blog->title}}</h3>
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
                <div class=" col-12">
                    <div class="postbox__wrapper">
                        <article class="postbox__item format-image transition-3">
                            <div class="postbox__content">
                                <p><img class="w-100" src="/front/assets/img/blog/{{$blog->image}}" alt=""></p>
                                <div class="postbox__meta">
                                    <span><a href="#"><i class="fal fa-user-circle"></i> {{$blog->author}} </a></span>
{{--                                    <span><a href="#"><i class="fal fa-clock"></i> {{$blog->created_at}}</a></span>--}}
                                    <span><a href="#commentView"><i class="fal fa-comment-alt-lines"></i>({{$commentsCount}}) Comments</a></span>
{{--                                    <span><a href="#"><i class="fal fa-eye"></i> 1,526 views</a></span>--}}
                                </div>
                                <h3 class="postbox__title">
                                    {{$blog->subtitle}}
                                </h3>
                                <div class="postbox__text">
                                   {{$blog->content}}
                                </div>
                            </div>
                        </article>
                        <div class="postbox__comment mb-65">
                            <h3 class="postbox__comment-title">(04) Comment</h3>
                            <ul>
                                <li>
                                    <div class="postbox__comment-box d-flex">
                                        <div class="postbox__comment-text" id="commentView">

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="postbox__comment-form">
                            <h3 class="postbox__comment-form-title">Leave a Reply</h3>
                            <form action="#">
                                <div class="row">
                                    <div id="successComment" class="alert alert-success"> </div>

                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="postbox__comment-input " >
                                            <input type="text" placeholder="Your Name" class="name">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="postbox__comment-input">
                                            <input type="email" placeholder="Your Email" class="email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="postbox__comment-input">
                                            <input type="text" placeholder="number" class="phone">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="postbox__comment-input">
                                            <input type="text" placeholder="Website" class="website">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="postbox__comment-input">
                                            <textarea placeholder="Enter your comment ..." class="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="postbox__comment-agree d-flex align-items-start mb-20">
                                            <input class="e-check-input" type="checkbox" id="e-agree">
                                            <label class="e-check-label" for="e-agree">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="postbox__comment-btn">
                                            <button type="button" class="tp-btn-yellow add_comment">Post comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- postbox area end -->
@endsection
@section('script')
    <script>
        $(document).ready(function (){

            fetchComments();
            function fetchComments(){
                $.ajax({
                    type:"GET",
                    url:"{{route('fetchComment')}}",
                    data: {
                        'blog_id': {{$blog->id}},
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType:"json",
                    success:function (response){
                    // console.log(response.comments)
                        $('#commentView').html(" ");
                        $.each(response.comments,function (key ,item) {
                            $('#commentView').append( '<div class="postbox__comment-name">\
                                <h5>'+item.name+'</h5>\
                                <span class="post-meta"> '+item.created_at+'</span>\
                            </div>\
                            <p>'+item.comment+'</p>\
                        ')
                        });
                    }
                })
            }









           $(document).on('click','.add_comment',function (e){
                e.preventDefault();
                // console.log('hello')
               var data={
                   'blog_id': {{$blog->id}},
                   'name': $('.name').val(),
                   'email': $('.email').val(),
                   'phone': $('.phone').val(),
                   'website': $('.website').val(),
                   'comment': $('.comment').val(),
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               };
                   // console.log(data)
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });
               $.ajax({
                   type:"POST",
                   url:"{{ route('comment.store') }}",
                   data: data,
                   dataType:"json",
                   success:function (response){


                            $('#successComment').text(response.message);
                            $('form input').val("");
                            fetchComments();

                   }
               })
           });
        });
    </script>
@endsection
