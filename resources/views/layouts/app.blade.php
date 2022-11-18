<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/icofont/icofont.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/aos/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/myanimation/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/myanimation/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <!-- themefy-icon -->

    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/popup_style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <title>Evfurnituers- @yield('title')</title>
</head>

<body>
    <div>
        @yield('content')
    </div>
</body>

</html>