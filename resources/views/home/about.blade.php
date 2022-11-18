@extends('layouts.app')

@section('title', 'About Us')

@section('content')
@include('home.topnav')
@include('home.navbar')
@extends('home.slidercontent')
@foreach($abouts as $row)
<div class="container-fluid">
    <div class="row mt-4 p-3">
        <div class="col-lg-6">
            <div class="card-body">
                <img src="{{asset('images/about/'.$row->proimage)}}" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-body">
                <h2>{{$row->title}}</h2>
                <p class="text-justify">{!!$row->aboutdesc!!}</p>
            </div>
        </div>
    </div>
    <?php
    $statements=DB::table('statements')->get();
    ?>
    @foreach($statements as $key)
    <div class="row bg-light mt-4 p-3">
        <div class="col-lg-4">
            <div class="card-body">
                <h3>Mission</h3>
                <p>{!!$key->mission!!}</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body">
                <h3>Vision</h3>
                <p>{{$key->vision}}</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body">
                <h3>Core Value</h3>
                <p>{{$key->coreValue}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach
@include('footer.footcontent')
@endsection
@extends('footer.footer')