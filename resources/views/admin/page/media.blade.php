@extends('layouts.admin.app')
@section('title', 'Media')
@section('subtitle', 'Media')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
<div class="wrapper">


    <div class="container">
        <div class="row">
            <div class="col-lg-10 card">
                <h4 class="text-success"></h4>

                <form action="" method="post">
                    <div class="col-12 py-2">

                        <input type="hidden" class="form-control" name="userId" value="">

                    </div>
                    <div class="col-12 py-2">
                        <label> Facebook </label>
                        <input type="text" class="form-control" name="facebook" value="">
                    </div>
                    <div class="col-12 py-2">
                        <label> Instagram </label>
                        <input type="text" class="form-control" name="instagram" value="">
                    </div>
                    <div class="col-12 py-2">
                        <label> Linkedin </label>
                        <input type="text" class="form-control" name="linkedin" value="">
                    </div>
                    <div class="col-12 py-2">
                        <label> Twitter </label>
                        <input type="text" class="form-control" name="twitter" value=" ">
                    </div>
                    <div class="col-12 py-2">
                        <label> Google+ </label>
                        <input type="text" class="form-control" name="google" value="">
                    </div>
                    <div class="col-12 py-2">
                        <button class="btn btn-success" type="submit" name="setfooters"><span class="fa fa-save">
                                Save</span></button>
                        <a href="businessset.php" class="btn btn-warning"><span class="fa fa-home"> General
                                Settings</span></a>
                    </div>
                </form>

            </div>
            @include('admin.footer')
            @endsection