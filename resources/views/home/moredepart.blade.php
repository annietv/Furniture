@extends('layouts.app')

@section('title', 'About Us')

@section('content')
@include('home.topnav')
@include('home.navbar')
@extends('home.slidercontent')


<div class="container-fluid">
    <div class="row mt-4 p-3">
        @foreach($products as $row)
        <div class="col-lg-3 col-sm-6 mb-5 col-6 mb-lg-0">
            <div class=" rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="{{ asset('images/products/'.$row->proimage)}}" alt="teacher">
                <div class="card-body">
                    <a href="{{url('home/morelisting/'.$row->id)}}">
                        <p class="card-title text-center ">{{$row->product_name}}</p>
                        <p class="text-center"><span class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                        </p>
                        <h4 class="text-center">{{number_format($row->current_price, 2)}}</h4>
                    </a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('footer.footcontent')
@endsection
@extends('footer.footer')