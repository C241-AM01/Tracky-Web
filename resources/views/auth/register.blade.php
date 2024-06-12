@extends('layouts.master-without-nav')
@section('title')
{{ __('Register') }}
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
                                <form action="index.html" class="mt-10" id="signInForm">
                                    <div class="hidden p-3 mb-3 text-base text-green-500 border border-green-200 rounded-md bg-green-50" id="successAlert">
                                        You have <b>successfully</b> signed in.
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="inline-block mb-2 text-base font-medium">UserName/
                                            Email ID</label>
                                        <input type="text" id="username" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter username or email">
                                        <div id="username-error" class="hidden mt-1 text-sm text-red-500">Please enter
                                            a valid email address.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
                                        <input type="password" id="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter password">
                                        <div id="password-error" class="hidden mt-1 text-sm text-red-500">Password
                                            must be at least 8 characters long and contain both letters and numbers.
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <input id="emailCheckRememberMe" class="size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400" type="checkbox" value="">
                                            <label for="emailCheckRememberMe" class="inline-block text-base font-medium align-middle cursor-pointer">Remember
                                                me</label>
                                        </div>
                                        <div id="remember-error" class="hidden mt-1 text-sm text-red-500">Please check
                                            the "Remember me" before submitting the form.</div>
                                    </div>
                                    <div class="mt-10">
                                        <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign
                                            Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="mt-10 text-center">
                            <p class="mb-0 text-slate-500 dark:text-zink-200">Already have an account ? <a href="{{ url('auth-login-basic') }}" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">Login</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="mt-5">
                    <p class="mb-0 text-center text-15 text-slate-500 dark:text-zink-200">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Tailwick. Crafted with <i class="text-red-500 ri-heart-fill"></i> by
                        <a href="http://themesdesign.in" class="underline transition-all duration-200 ease-linear text-slate-800 dark:text-zink-50 hover:text-custom-500 dark:hover:text-custom-500">Themesdesign</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="relative z-10 flex items-center justify-center min-h-screen px-10 text-center grow py-14">
            <div>
                <a href="#!"><img src="{{ URL::asset('build/images/trackylogo.png') }}" alt="" class="block mx-auto mb-14 h-14"></a>
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