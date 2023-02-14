<link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/login.css')}}">

<div class="container">
    <div class="screen">
        <div class="screen__content">
                <form class="login" method="POST" action="{{ route('login') }}">

                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full form-control"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
{{--                    <div class="block mt-4">--}}
{{--                        <label for="remember_me" class="inline-flex items-center">--}}
{{--                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                        </label>--}}
{{--                    </div>--}}

                    <div class="flex items-center justify-end mt-4">
{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                                {{ __('Forgot your password?') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}

                        <x-button class="ml-3 btn btn-secondary">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
