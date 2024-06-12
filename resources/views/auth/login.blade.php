@extends('layouts.master-without-nav')
@section('title')
{{ __('Sign In') }}
@endsection
@section('content')

<body class="font-public">
    <div class="relative flex flex-col w-full overflow-hidden xl:flex-row to-custom-100 bg-gradient-to-r from-custom-500 dark:to-custom-500 dark:from-custom-500">
        <div class="min-h-[calc(100vh_-_theme('spacing.4')_*_2)] mx-3 lg:w-[40rem] shrink-0 px-10 py-14 flex items-center justify-center m-4 bg-white rounded z-10 relative dark:bg-zink-700 dark:text-zink-100 md:mx-auto xl:mx-4">
            <div class="flex flex-col w-full h-full">
                <div class="my-auto">
                    <div class="lg:w-[25rem] mx-auto">
                        <div class="mt-5 tab-content">
                            <div class="block tab-pane" id="emailLogin">
                                <form method="POST" action="{{ route('login') }}" class="mt-10" id="signInForm">
                                    @csrf
                                    <div class="hidden p-3 mb-3 text-base text-green-500 border border-green-200 rounded-md bg-green-50" id="successAlert">
                                        You have <b>successfully</b> signed in.
                                    </div>
                                    <div class="mb-3">
                                        <x-label for="email" value="{{ __('Email') }}" />
                                        <x-input id="email" type="email" name="email" :value="old('email', 'role@gmail.com')" required autofocus autocomplete="username" placeholder="Enter your email" />
                                        <x-input-error for="email" />
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <x-label for="password" value="{{ __('Password') }}" />
                                            </div>
                                            <div>
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-gray-500 dark:text-gray-100 text-sm">Forgot password?</a>
                                                @endif
                                            </div>
                                        </div>
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" value="12345678" />
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <label for="checkboxDefault1" class="inline-block text-base font-medium align-middle cursor-pointer">Remember me</label>
                                        </div>
                                        <x-input-error for="remember" />
                                    </div>
                                    <div class="mt-10">
                                        <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-10 text-center">
                            <p class="mb-0 text-slate-500 dark:text-zink-200">Don't have an account ? <a href="{{ route('register') }}" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500">SignUp</a> </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <p class="mb-0 text-center text-15 text-slate-500 dark:text-zink-200">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Tailwick. Crafted with <i class="text-red-500 ri-heart-fill"></i> by
                        <a href="http://themesdesign.in" class="underline transition-all duration-200 ease-linear text-slate-800 dark:text-zink-50 hover:text-custom-500">Themesdesign</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="relative z-10 flex items-center justify-center min-h-screen px-10 grow py-14">
            <div>
                <a href="{{ url('index') }}"><img src="{{ URL::asset('build/images/trackylogo.png') }}" alt="" class="block mx-auto mb-14 h-14"></a>
                <img src="{{ URL::asset('build/images/dashboard.png') }}" alt="" class="block object-cover mx-auto shadow-lg md:max-w-md rounded-xl shadow-custom-800">
                <div class="mt-10 text-center">
                    <h3 class="mt-4 mb-3 capitalize text-black">Tools For Seamless Asset Management
                    </h3>
                    <p class="max-w-2xl text-black text-16">Unlock the potential of our comprehensive asset management tools, designed to empower your business in tracking both static and mobile assets. Elevate your business’s capabilities with our innovative live tracking solutions.
</p>
                </div>
            </div>
        </div>
    </div>
    @endsection