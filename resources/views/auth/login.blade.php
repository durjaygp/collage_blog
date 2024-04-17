{{-- <x-guest-layout>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{-- </x-guest-layout>--}}



 <!DOCTYPE html>
 <html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">
 <head>
     <!-- Required meta tags -->
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <!-- Favicon icon-->
     <link rel="shortcut icon" type="image/png" href="{{asset('back')}}/assets/images/logos/favicon.png" />

     <!-- Core Css -->
     <link  id="themeColors"  rel="stylesheet" href="{{asset('back')}}/assets/css/style.min.css" />
     <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">
     <title>Login</title>
 </head>

 <body>
 <!-- Preloader -->
 <div class="preloader">
     <img src="{{asset($website->fav_icon)}}" alt="loader" class="lds-ripple img-fluid" />
 </div>
 <div id="main-wrapper" class="auth-customizer-none">
     <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
         <div class="position-relative z-index-5">
             <div class="row">
                 <div class="col-xl-7 col-xxl-8">
                     <a href="#" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                         <img src="{{asset($website->website_logo)}}" class="dark-logo" alt="Logo-Dark" />
                         <img src="{{asset($website->website_logo)}}" class="light-logo" alt="Logo-light" />
                     </a>
                     <div class="d-none d-xl-flex align-items-center justify-content-center h-n80">
                         <img src="{{asset('back')}}/assets/images/backgrounds/login-security.svg" alt="modernize-img" class="img-fluid" width="500">
                     </div>
                 </div>
                 <div class="col-xl-5 col-xxl-4">
                     <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                         <div class="auth-max-width col-sm-12 col-md-7 col-xl-9 px-4">
                             <h2 class="mb-1 fs-7 fw-bolder">Welcome to {{$website->name}}</h2>
                             <div class="position-relative text-center my-4">
                                 <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">or sign
                                     in
                                     with</p>
                                 <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                             </div>
                             <form method="post" action="{{route('login')}}">
                                 @csrf
                                 <div class="mb-3">
                                     <label for="exampleInputEmail1" class="form-label">Email</label>
                                     <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                                 </div>
                                 <div class="mb-4">
                                     <label for="exampleInputPassword1" class="form-label">Password</label>
                                     <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                 </div>

                                 <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                                 <div class="d-flex align-items-center justify-content-center">
                                     <p class="fs-4 mb-0 fw-medium">      <a class="text-primary fw-medium fs-3" href="{{route('password.request')}}">Forgot Password ?</a></p>
                                     <a class="text-primary fw-medium ms-2" href="{{route('register')}}">Create an
                                         account</a>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Import Js Files -->
 <script src="{{asset('back')}}/assets/libs/jquery/dist/jquery.min.js"></script>
 <script src="{{asset('back')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
 <script src="{{asset('back')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!-- core files -->
 <script src="{{asset('back')}}/assets/js/app.min.js"></script>
 <script src="{{asset('back')}}/assets/js/app.init.js"></script>
 <script src="{{asset('back')}}/assets/js/app-style-switcher.js"></script>
 <script src="{{asset('back')}}/assets/js/sidebarmenu.js"></script>
 <script src="{{asset('back')}}/assets/js/custom.js"></script>
 <script src="{{asset('back')}}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
 <script src="{{asset('back')}}/assets/js/dashboard2.js"></script>
 <script src="{{asset('back')}}/assets/js/apps/contact.js"></script>
 <script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
 <script src="{{asset('back')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="{{asset('back')}}/assets/js/datatable/datatable-basic.init.js"></script>

 <!-- solar icons -->
 <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

 <script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
 @if($errors->any())
     @foreach($errors->all() as $error)
         <script>
             iziToast.error({
                 title: '',
                 position:'topRight',
                 message: '{{$error}}',
             });
         </script>
     @endforeach

 @endif

 @if(session()->get('success'))
     <script>
         iziToast.success({
             title: '',
             position:'topRight',
             message: '{{session()->get('success')}}',
         });

     </script>
 @endif
 </body>

 </html>







