<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper text-center">
            <a href="{{route('dashboard')}}"><img class="img-fluid for-light" width="60" src="{{asset('front/assets/img/motion round/logo.png')}}" alt="">
                <img class="img-fluid for-dark" width="60" src="{{asset('front/assets/img/motion round/logo.png')}}" alt="">
                <br>Motion Round</a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid" src="{{asset('front/assets/img/motion round/logo.png')}}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar" style="padding-bottom: 110px;">
                    <li class="back-btn">
                        <a href="{{route('dashboard')}}"><img class="img-fluid" src="{{asset('front/assets/img/motion round/logo.png')}}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-list">

                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="lan-6">{{ trans('lang.Dashboard') }}</span>
                        </a>
{{--                        <ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none;' }}">--}}
{{--                            <li><a href="{{ route('records.index') }}" class="active">{{ trans('lang.Show') }}</a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'main.index' ? 'active' : '' }}" href="{{ route('main.index') }}"><i data-feather="airplay"></i><span class="lan-6">{{ trans('lang.Main') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'social.index' ? 'active' : '' }}" href="{{ route('social.index') }}"><i class="icofont icofont-ui-social-link"></i><span class="lan-6"> {{ trans('lang.Social') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'creative.index' ? 'active' : '' }}" href="{{ route('creative.index') }}"><i class="fa fa-puzzle-piece"></i><span class="lan-6"> {{ trans('lang.Creative') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'clients.index' ? 'active' : '' }}" href="{{ route('clients.index') }}"><i class="fa fa-shield"></i><span class="lan-6"> {{ trans('lang.Clients') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'services_section.index' ? 'active' : '' }}" href="{{ route('services_section.index') }}"><i data-feather="activity"></i><span class="lan-6">{{ trans('lang.Services Section') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'services.index' ? 'active' : '' }}" href="{{ route('services.index') }}"><i class="fa fa-life-ring"></i></i><span class="lan-6"> {{ trans('lang.Services') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'projects.index' ? 'active' : '' }}" href="{{ route('projects.index') }}"><i class="fa fa-image"></i><span class="lan-6"> {{ trans('lang.Projects') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'feedbacks.index' ? 'active' : '' }}" href="{{ route('feedbacks.index') }}"><i class="fa fa-comment-o"></i><span class="lan-6"> {{ trans('lang.Feedbacks') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'blog.index' ? 'active' : '' }}" href="{{ route('blog.index') }}"><i class="fa fa-desktop"></i><span class="lan-6"> {{ trans('lang.Blog') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'newsletter.index' ? 'active' : '' }}" href="{{ route('newsletter.index') }}"><i class="fa fa-envelope-o"></i><span class="lan-6"> {{ trans('lang.Newsletter') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'about.index' ? 'active' : '' }}" href="{{ route('about.index') }}"><i class="fa fa-crosshairs"></i><span class="lan-6"> {{ trans('lang.About') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'aboutcards.index' ? 'active' : '' }}" href="{{ route('aboutcards.index') }}"><i data-feather="activity"></i><span class="lan-6">{{ trans('lang.About Cards') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'team.index' ? 'active' : '' }}" href="{{ route('team.index') }}"><i class="fa fa-headphones"></i><span class="lan-6"> {{ trans('lang.Team') }}</span>
                        </a>
                    </li>
{{--                    <li class="sidebar-list">--}}
{{--                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'portfolio.index' ? 'active' : '' }}" href="{{ route('portfolio.index') }}"><i class="fa fa-anchor"></i><span class="lan-6"> {{ trans('lang.Portfolio') }}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'contact.index' ? 'active' : '' }}" href="{{ route('contact.index') }}"><i class="fa fa-paper-plane-o"></i><span class="lan-6"> {{ trans('lang.Contacts') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ Route::currentRouteName() == 'settings.index' ? 'active' : '' }}" href="{{ route('settings.index') }}"><i class="fa fa-cogs"></i><span class="lan-6"> {{ trans('lang.Settings') }}</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
