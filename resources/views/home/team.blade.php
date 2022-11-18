@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
@include('home.topnav')
@include('home.navbar')
@extends('home.slidercontent')

<section class="section">
    <div class="container-fluid">
        <!-- <h2 class="text-center">Meet With The Team</h2> -->
        <div class="row">

            @foreach($ourteams as $row)
            <div class=" col-lg-4">
                <div class="card-body  rounded-0 hover-shadow img-hover-zoom--point-zoom">
                    <img class="card-img-top rounded-0" src=" {{asset('images/team/'.$row->image)}}" alt=""
                        width="100%">
                    <h3 class=" text-center">{{$row->fullname}}</h3>
                    <h5 class="text-center">{{$row->positions}}</h5>
                    <p class="text-center">
                        <a href="{{url('home/moreteam/'.$row->id)}}" class=" btn btn-primary btn-sm"> View
                            More</a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@include('footer.footcontent')
@endsection
@extends('footer.footer')