@extends('layouts.app')

@section('title', 'Secure Cashout')

@section('content')
@include('home.topnav')
@include('home.navbar')
@extends('home.slidercontent')
@foreach($products as $row)
<section class="section">
    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h3>{{$row->product_name}}</h3>
                <p>{!!$row->product_desc!!}</p>
                <img src="{{asset('images/products/'.$row->proimage)}}" alt="" width="100%">
            </div>
            <div class="col-lg-8">
                <form action="{{Route('process_cash')}}" method="post">
                    @csrf
                    <div class="col-12 py-3">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control" value="">
                    </div>
                    <div class="col-12 py-3">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" value="">
                    </div>
                    <div class="col-12 py-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="">
                    </div>
                    <div class="col-12 py-3">
                        <label>Product</label>
                        <input type="text" name="product_name" class="form-control" value="{{$row->product_name}}">
                    </div>
                    <div class="col-12 py-3">
                        <label>Amount</label>
                        <input type="text" name="current_price" class="form-control" value="{{$row->current_price}}">
                    </div>
                    <div class="col-12 py-3">
                        <label>Product Descriptions</label>
                        <textarea name="product_desc" id="" cols="30" rows="10"
                            class="form-control">{!!$row->product_desc!!}</textarea>
                    </div>
                    <div class=" col-12 py-3">
                        <label>Color Description</label>
                        <input type="text" name="color" class="form-control" value="">
                    </div>

                    <input type="hidden" name="proimage" class="form-control" value="{{$row->proimage}}">

                    <div class="col-12 py-3">
                        <label>Comments</label>
                        <textarea name="comments" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12 py-3">
                        <button class="btn btn-primary" type="submit" name="secure"> Make Payment</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endforeach
@include('footer.footcontent')
@endsection
@extends('footer.footer')