@extends('layouts.admin_design')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">All Tags</li>
            </ol>

            @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">All Tags
                                <div class="" style="float:right">
                                    <a href="{{url('admin/tags/create')}}" target="_blank">
                                        <button class="btn btn-large btn-primary">Add Tag</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table myTable">
                                    <thead>
                                    <th>No.</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->name}}</td>
                                            <td>{{$tag->slug}}</td>
                                            <td><a href="{{ url('admin/tags/edit/'.$tag->id) }}" target="_blank">
                                                    <span class="fa fa-edit" style="font-size: 35px;"></span>
                                            <td>
                                                <a rel="{{ $tag->id }}"
                                                   rel1="delete-tags" href="javascript:" class="deleteTag">
                                                    <span class="fa fa-remove" style="font-size: 35px; color: red;"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection