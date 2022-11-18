@extends('layouts.admin.app')
@section('title', 'Payment Settings')
@section('subtitle', 'Payment Settings')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
@foreach($payments as $row)
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>


                <div class="alert-success"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" col-12 py-3">
                        <label> Bank Name </label>
                        <input type="text" name="bank" class="form-control" value="{{$row->bank}}">
                    </div>
                    <div class=" col-12 py-3">
                        <label> Account Name </label>
                        <input type="text" name="account_name" class="form-control" value="{{$row->account_name}}">
                    </div>
                    <div class=" col-12 py-3">
                        <label> Account Number </label>
                        <input type="text" name="account_number" class="form-control" value="{{$row->account_number}}">
                    </div>
                    <div class="col-12 py-3">
                        <label> Payment Terms </label>
                        <textarea name="payment_terms" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px">{{$row->payment_terms}}</textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Status: </label>
                        <select name="status" class="form-control select2bs4 " style="width: 100%;">
                            <option value="" select selected>~~~~Select an option~~~~</option>
                            <option value="1" @if($row->status ==1) selected @endif>Active</option>
                            <option value="0" @if($row->status ==0) selected @endif>inactive</option>
                        </select>
                    </div>

                    <div class="col-12 py-3">
                        <button class="btn btn-warning btn-sm" type="submit" name="createabout"><span
                                class="fa fa-plus-square"></span>
                            Update Payments</button>

                    </div>

            </div>
            </form>



        </div>
    </div>
</div>
</div>

</div>






</div>
@endforeach
@include('admin.footer')
@endsection