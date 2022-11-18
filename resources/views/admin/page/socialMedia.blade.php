@extends('layouts.admin.app')
@section('title', 'Social Media Handles')
@section('subtitle', 'Social Media Handles')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
@foreach($socialMedia as $row)
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
                        <label> Facebook </label>
                        <input type="text" class="form-control" name="facebook" value="{{$row->facebook}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Instagram </label>
                        <input type="text" class="form-control" name="instagram" value="{{$row->instagram}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Linkedin </label>
                        <input type="text" class="form-control" name="linkedin" value="{{$row->linkedin}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Twitter </label>
                        <input type="text" class="form-control" name="twitter" value="{{$row->twitter}}">
                    </div>
                    <div class="col-12 py-2">
                        <label> Google+ </label>
                        <input type="text" class="form-control" name="google" value="{{$row->google}}">
                    </div>
                    <div class="col-12 py-2">
                        <button class="btn btn-success" type="submit" name="setfooters"><span class="fa fa-save">
                                Save</span></button>

                    </div>
                </form>

            </div>
            @endforeach
            @include('admin.footer')
            @endsection