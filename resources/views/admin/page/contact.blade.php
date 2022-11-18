@extends('layouts.admin.app')
@section('title', 'New Order')
@section('subtitle', 'New Order')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
<div class="wrapper">




    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <!-- <a href="{{('../products/department')}}"><button class="btn btn-primary">Add New</button></a> -->
                <hr class="border-primary">

                <div class=" table-responsive m-t-40 py-3">
                    <table id="example1" class="table  table-striped td-responsive norow">
                        <thead>
                            <tr>

                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Subjects</th>
                                <th>Comments</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($contacts as $row)
                        <tbody>



                            <tr>
                                <td>{{$row->fullname}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->subject}}</td>
                                <td>{{$row->contents}}</td>


                                <td>


                                    <a href="{{url('admin/order/deletecontact/'.$row->id)}}"><button type="button"
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