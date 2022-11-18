@extends('layouts.admin.app')
@section('title', 'View Team')
@section('subtitle', 'View Team')
@section('content')
@include('admin.sibebar')
@include('admin.subTitle')
<div class="wrapper">




    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="{{('../page/team')}}"><button class="btn btn-primary">Add New Team</button></a>
                <hr class="border-primary">

                <div class=" table-responsive m-t-40 py-3">
                    <table id="example1" class="table  table-striped td-responsive norow">
                        <thead>
                            <tr>

                                <th>Fullname</th>
                                <th>Position</th>
                                <th>Bio-Data</th>
                                <th>Picture</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($ourteams as $row)
                        <tbody>



                            <tr>
                                <td>{{$row->fullname}}</td>
                                <td>{{$row->positions}}</td>
                                <td>{{$row->contents}}</td>
                                <td><img src=" {{asset('images/team/'.$row->image)}}" alt="" width="100px">
                                </td>
                                <td>

                                    <a href="{{url('admin/views/editteam/'.$row->id)}}"><button type="button"
                                            class="btn btn-xs btn-primary"><i class="fa fa-wrench"></i></button></a>
                                    <a href="{{url('admin/views/deleteteam/'.$row->id)}}"><button type="button"
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