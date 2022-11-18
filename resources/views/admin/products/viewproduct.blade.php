@extends('layouts.admin.app')
@section('title', 'Create new Models')
@section('subtitle', 'Create New Models')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
<div class="wrapper">




    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="{{('../products/product')}}"><button class="btn btn-primary">Add New</button></a>
                <hr class="border-primary">

                <div class=" table-responsive m-t-40 py-3">
                    <table id="example1" class="table  table-striped td-responsive norow">
                        <thead>
                            <tr>

                                <th>Product Name</th>
                                <th>Departments</th>

                                <th>Quantity</th>
                                <th>Initial price</th>
                                <th>Current price</th>
                                <th>Description</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($products as $row)
                        <tbody>



                            <tr>
                                <td>{{$row->product_name}}</td>
                                <td>{{$row->departments}}</td>
                                <td>{{$row->quantity}}</td>
                                <td>{{$row->initial_price}}</td>
                                <td>{{$row->current_price}}</td>
                                <td>{{$row->product_desc}}</td>
                                <td><img src=" {{asset('images/products/'.$row->proimage)}}" alt="" width="100px">
                                </td>
                                <td>

                                    <a href="{{url('admin/products/editproduct/'.$row->id)}}"><button type="button"
                                            class="btn btn-xs btn-primary"><i class="fa fa-wrench"></i></button></a>
                                    <a href="{{url('admin/products/deleteproduct/'.$row->id)}}"><button type="button"
                                            class="btn btn-xs btn-danger"
                                            onclick="return confirm('Are you sure to delete this record?')"><i
                                                class="fa fa-trash"></i></button></a>


                                </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @include('admin.footer')
        @endsection