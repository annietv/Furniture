@extends('layouts.admin.app')
@section('title', 'Contact Details')
@section('subtitle', 'Contact Details')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
@foreach($contact_details as $row)
<div class="wrapper">


    <div class="container">
        <div class="row">
            <div class="col-lg-10 card">
                <h4 class="text-success"></h4>

                <form action="" method="post">
                    @csrf
                    <div class="col-12 py-2">

                        <!-- <input type="hidden" class="form-control" name="userId" value=""> -->

                    </div>
                    <div class="col-12 py-2">
                        <label> Email Address</label>
                        <input type="text" class="form-control" name="email" value="{{$row->email}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Phone Number Line 1</label>
                        <input type="text" class="form-control" name="phoneone" value="{{$row->phoneone}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Phone Number Line 2 </label>
                        <input type="text" class="form-control" name="phonetwo" value="{{$row->phonetwo}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Office Address 1 </label>
                        <textarea name="office_address_one" id="compose-textarea" cols="30" rows="10"
                            class="form-control">{{$row->office_address_one}}</textarea>
                    </div>
                    <div class="col-12 py-2">
                        <label> Office Address 2 </label>
                        <textarea name="office_address_two" id="compose-textarea2" cols="30" rows="10"
                            class="form-control">{{$row->office_address_two}}</textarea>
                    </div>

                    <div class="col-12 py-2">
                        <button class="btn btn-success" type="submit" name="setfooters"><span class="fa fa-save">
                            </span> Save</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endforeach
@include('admin.footer')
@endsection