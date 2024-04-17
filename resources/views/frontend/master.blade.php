<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Instruct Internet Explorer to use its latest rendering engine -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <!-- Title for our website -->
    <title>@yield('title')</title>
    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{asset($website->fav_icon)}}" type="image/x-icon">
    <link rel="icon" href="{{asset($website->fav_icon)}}" type="image/x-icon">
    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Laila:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700,700i" rel="stylesheet">
    <!-- Main Stylesheet  -->
    <link href="{{asset('homePage')}}/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css" />
    <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">
    <!-- Respond js  -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('style')
</head>

<body>
<div class="page_wrap">

    @include('frontend.inc.header')

    @yield('content')

    @include('frontend.inc.footer')

</div>

<script src="{{asset('homePage')}}/js/bundle.min.js"></script>
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
