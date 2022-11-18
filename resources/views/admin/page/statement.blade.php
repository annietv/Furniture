@extends('layouts.admin.app')
@section('title', 'Company Statements')
@section('subtitle', 'Company Statements')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
@foreach($statements as $row)
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>
                <div class="alert-success"></div>
                <form action="" method="post">
                    @csrf
                    <div class="col-12 py-3">
                        <label> Mission </label>
                        <textarea name="mission" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px">{{$row->mission}}</textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Vision </label>
                        <textarea name="vision" cols="30" rows="10" id="compose-textareas" class="form-control "
                            style="height: 100px">{{$row->vision}}</textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Core Value </label>
                        <textarea name="coreValue" cols="30" rows="10" id="compose-textareass" class="form-control "
                            style="height: 100px">{{$row->coreValue}}</textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Status: </label>
                        <select name="status" class="form-control select2bs4 " style="width: 100%;">
                            <option value="" select selected>~~~~Select an option~~~~</option>
                            <option value="1" @if($row->status == 1) selected @endif>Active</option>
                            <option value="0" @if($row->status == 0) selected @endif>inactive</option>
                        </select>
                    </div>

                    <div class="col-12 py-3">
                        <button class="btn btn-primary btn-sm" type="submit" name="createstatement"><span
                                class="fa fa-plus-square"></span> Update Post</button>
                    </div>

            </div>
            </form>



        </div>
    </div>
</div>





</div>
@endforeach
@include('admin.footer')
@endsection