@extends('layouts.admin.app')
@section('title', 'Add Products')
@section('subtitle', 'Add Products')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')

<div class="wrapper">
    <div class="container-fluid">
        <div class="card-body bg-white rounded p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12  py-3">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" value="">
                </div>
                <div class="col-12  py-3">
                    <label>Product Departments</label>
                    <select name="departments" class="form-control select2bs4">
                        <option value="">Select one</option>
                        @foreach($departments as $row)
                        <option value="{{$row->depart_name}}">{{$row->depart_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12  py-3">
                    <label>Product Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="">
                </div>
                <div class="col-12  py-3">
                    <label>Initial Price</label>
                    <input type="number" name="initial_price" class="form-control" value="">
                </div>
                <div class="col-12  py-3">
                    <label>Current Price</label>
                    <input type="number" name="current_price" class="form-control" value="">
                </div>
                <div class="col-12  py-3">
                    <label>Product Descriptions</label>
                    <textarea id="compose-textarea" cols="30" rows="10" class="form-control"
                        name="product_desc"></textarea>
                </div>
                <div class="col-12 py-3">
                    <label> Add Picture</label>

                    <div id="kv-avatar-errors-1"
                        class="input-group mb-3 px-2 py-2 rounded-pill bg-light shadow-lg justify-content-center col-lg-">
                        <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0"
                            name="proimage">
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose
                            file</label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                    class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                    class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                        </div>
                    </div>

                    <!-- Uploaded image area-->
                    <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box
                        below.</p>
                    <div class="image-area mt-4"><img id="imageResult" src="#" alt=""
                            class="img-fluid rounded shadow-sm mx-auto d-block "></div>

                </div>
        </div>

    </div>

</div>
<div class="col-12  py-3">
    <button class="btn btn-success btn-sm" type="submit" name="product"> Post Product</button>
</div>
</form>
</div>
</div>
</div>
</div>
@include('admin.footer')
@endsection