@extends('layouts.admin.app')
@section('title', 'Email Configuration')
@section('subtitle', 'Email Configuration')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
@foreach($mailsets as $row)
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>
                <div class="alert-success"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 py-3">
                        <label> SMTP Secutity Type </label>
                        <input type="text" name="smtp" class="form-control" value="{{$row->smtp}}">
                    </div>
                    <div class="col-12 py-3">
                        <label> Email Host</label>
                        <input type="text" name="host" class="form-control" value="{{$row->host}}">
                    </div>
                    <div class="col-12 py-3">
                        <label> Port</label>
                        <input type="text" name="port" class="form-control" value="{{$row->port}}">
                    </div>
                    <div class="col-12 py-3">
                        <label> Username </label>
                        <input type="email" name="username" class="form-control" value="{{$row->username}}">
                        <small> e.g yourmail@gmail.com</small>
                    </div>
                    <div class="col-12 py-3">
                        <label> Password </label>
                        <input type="password" name="psw" class="form-control" value="{{$row->psw}}">
                        <small> your mail password</small>
                    </div>

                    <div class="col-12 py-3">
                        <button class="btn btn-primary btn-sm" type="submit" name="models"><span
                                class="fa fa-plus-square"></span>
                            Set Mail</button>
                    </div>

            </div>
            </form>



        </div>
    </div>






</div>
@endforeach
@include('admin.footer')
@endsection