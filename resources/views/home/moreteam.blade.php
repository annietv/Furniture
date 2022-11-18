@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
@include('home.topnav')
@include('home.navbar')
@extends('home.slidercontent')
@foreach($ourteams as $row)
<section class="section">
    <div class=" container-fluid">
        <div class="row mt-4 p-3">
            <div class="col-lg-6">
                <div class="card-body">
                    <img src="{{asset('images/team/'.$row->image)}}" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-body">
                    <h2>{{$row->fullname}}</h2>
                    <p class="text-justify">{!!$row->contents!!}</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endforeach
@include('footer.footcontent')
@endsection
@extends('footer.footer')