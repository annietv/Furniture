@extends('layouts.app')

@section('title', 'congratulations')

@section('content')
@include('home.topnav')



<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="text-success">Congratulations Order has bean placed successfully</h3>
                <?php
    $payments=DB::table('payments')->get();
    ?>
                @foreach($payments as $key)
                <p>{!! $key->payment_terms !!}</p>
                <hr>
                <p><strong>{{$key->bank}}</strong></p>
                <p><strong>{{$key->account_name}}</strong></p>
                <p><strong>{{$key->account_number}}</strong></p>
                @endforeach
                <h5>For more informations or further verifications kindly contact us with details below:</h5>
                <?php
    $contact_details=DB::table('contact_details')->get();
    ?>
                @foreach($contact_details as $dey)
                <p>{!! $dey->office_address_one !!}</p>
                <p>{!! $dey->phoneone !!}</p>
                <p>{!! $dey->email !!}</p>
                @endforeach
                <a href="{{Route('home.index')}}" class="btn btn-primary"> Home Page</a>
            </div>
        </div>
    </div>
</section>


@endsection
@extends('footer.footer')