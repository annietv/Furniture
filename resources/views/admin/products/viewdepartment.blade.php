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

                <a href="{{('../products/department')}}"><button class="btn btn-primary">Add New</button></a>
                <hr class="border-primary">

                <div class=" table-responsive m-t-40 py-3">
                    <table id="example1" class="table  table-striped td-responsive norow">
                        <thead>
                            <tr>

                                <th>Department Name</th>
                                <th>Descriptions</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($departments as $row)
                        <tbody>



                            <tr>
                                <td>{{$row->depart_name}}</td>
                                <td>{{$row->contents}}</td>
                                <td><img src=" {{asset('images/department/'.$row->image)}}" alt="" width="100px">
                                </td>
                                <td>

                                    <a href="{{url('admin/products/editdepartment/'.$row->id)}}"><button type="button"
                                            class="btn btn-xs btn-primary"><i class="fa fa-wrench"></i></button></a>
                                    <a href="{{url('admin/products/deletedepartment/'.$row->id)}}"><button type="button"
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