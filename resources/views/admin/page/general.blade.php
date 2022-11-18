@extends('layouts.admin.app')
@section('title', 'General Setting')
@section('subtitle', 'General Setting')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
@foreach($generals as $gen)
<div class="wrapper">
    <div class="container-fluid">
        <div class="card-body bg-white rounded p-4">
            <form action="{{Route('general.process')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class=" row">

                    <div class="col-lg-6 py-3 p-3">
                        <label>Business Name</label>
                        <input type="text" name="businessName" class="form-control" value="{{$gen->businessName}}">
                    </div>
                    <div class=" col-lg-6 py-3 p-3">
                        <label>Website Name</label>
                        <input type="text" name="websiteName" class="form-control" value="{{$gen->websiteName}}">
                    </div>
                    <div class="col-lg-6 py-3 p-3">
                        <label> Time Zone </label>
                        <select name="timeZone" class="form-control select2bs4 " style="width: 100%;">
                            <option value="Africa/Lagos">Africa/Lagos</option>
                            <option value="Africa/Accra">Africa/Accra</option>
                            <option value="March">Africa/Lome</option>
                            <option value="Africa/Freetown">Africa/Freetown</option>
                            <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                            <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                            <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                            <option value="Europe/Bratislava">Europe/Bratislava</option>
                            <option value="Europe/Andorra">Europe/Andorra</option>
                            <option value="Europe/London">Europe/London</option>
                            <option value="Europe/Simferopol">Europe/Simferopol</option>
                            <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                            <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                            <option value="Europe/Paris">Europe/Paris</option>
                            <option value="Europe/Podgorica">Europe/Podgorica</option>
                            <option value="Europe/Madrid">Europe/Madrid</option>
                        </select>
                    </div>
                    <div class="col-lg-6 py-3 p-3">
                        <label>Country</label>
                        <input type="text" name="countrys" class="form-control" value="{{$gen->countrys}}">
                    </div>
                    <div class="col-lg-6 py-3 p-3">
                        <label>Default Currency Symbol</label>
                        <input type="text" name="currency" class="form-control" value="{{$gen->currency}}">
                    </div>
                    <div class="col-lg-6 p-3">
                        <label> Add Site Logo</label>

                        <div id="kv-avatar-errors-1"
                            class="input-group mb-3 px-2 py-2 rounded-pill bg-light shadow-lg justify-content-center col-lg-">
                            <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0"
                                name="siteLogo">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose
                                file</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                        class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                        class="text-uppercase font-weight-bold text-muted">Choose
                                        file</small></label>
                            </div>
                        </div>

                        <!-- Uploaded image area-->
                        <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the
                            box below.</p>
                        <div class="image-area mt-4"><img id="imageResult" src="#" alt=""
                                class="img-fluid rounded shadow-sm mx-auto d-block "></div>

                    </div>





                    <div class="col-lg-6 p-3">
                        <label> Add Site Favicon</label>

                        <input type="file" name="favicon" class="form-control">
                    </div>
                    <div class=" col-lg-6 p-3">
                        <label> Pre-Loader Image</label>

                        <input type="file" name="preloader" class="form-control">
                    </div>

                    <div class="col-lg-6 py-3 p-3">
                        <label>Business Address</label>
                        <textarea name="busAddress" id="compose-textarea" class="form-control" cols=" 30"
                            rows="10">{{$gen->busAddress}}</textarea>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-plus-square"></span>
                        Udate Settings</button>
                </div>
        </div>
        @endforeach
        </form>
    </div>
</div>
</div>
</div>
@include('admin.footer')
@endsection