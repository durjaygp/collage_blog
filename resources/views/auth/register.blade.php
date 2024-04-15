{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block w-full mt-1"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}


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

    <title>Sign Up</title>
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('back')}}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
<div id="main-wrapper" class="auth-customizer-none">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
        <div class="position-relative z-index-5">
            <div class="row">
                <div class="col-xl-7 col-xxl-8">
                    <a href="../main/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                        <img src="{{asset('back')}}/assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                        <img src="{{asset('back')}}/assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                    </a>
                    <div class="d-none d-xl-flex align-items-center justify-content-center h-n80">
                        <img src="{{asset('back')}}/assets/images/backgrounds/login-security.svg" alt="modernize-img" class="img-fluid" width="500">
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-4">
                    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="auth-max-width col-sm-12 col-md-12 col-xl-12 px-4">
                            <h2 class="mb-1 fs-7 fw-bolder">Welcome to Modernize</h2>
                            <p class="mb-7">Your Admin Dashboard</p>
                            <div class="row">
                            </div>
                            <div class="position-relative text-center my-4">
                                <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">or sign
                                    Up
                                    with</p>
                                <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputtext" name="name" aria-describedby="textHelp" placeholder="Your full name">
                                </div>
                                <div class="mb-3">
                                    @php
                                        $types = \App\Models\UserType::whereStatus(1)->latest()->get();
                                    @endphp
                                    <label for="exampleInputEmail1" class="form-label">User Type</label>
                                    <select name="user_type_id" id="" class="form-control">
                                        @foreach($types as $row)
                                            <option value="{{$row->id}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nic" class="form-label">NIC <small>(*If you are Alumni)</small></label>
                                    <input type="text" class="form-control" id="nic" name="nic" aria-describedby="textHelp" placeholder="Your full name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</button>
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{route('login')}}">Sign In</a>
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
</body>

</html>

