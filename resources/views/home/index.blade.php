@extends('layouts.app')

@section('title', 'Home page')


<body class="">
    @section('content')
    @include('home.topnav')
    @include('home.navbar')
    @extends('home.slidercontent')
    @include('home.secitem')
    @include('home.listing')
    @include('footer.footcontent')
    @endsection
    @extends('footer.footer')


</body>