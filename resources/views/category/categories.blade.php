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
                <li class="active">All Categories</li>
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
                            <div class="card-header">All Categories
                                <div class="" style="float:right">
                                    <a href="{{url('admin/categories/create')}}" target="_blank">
                                        <button class="btn btn-large btn-primary">Add Category</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table myTable">
                                    <thead>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->created_at->diffForHumans()}}</td>
                                            <td>{{$category->updated_at->diffForHumans()}}</td>
                                            <td><a href="{{ url('admin/categories/edit/'.$category->id) }}" target="_blank">
                                                    <span class="fa fa-edit" style="font-size: 35px;"></span>
                                            <td>
                                                <a rel="{{ $category->id }}"
                                                   rel1="delete-categories" href="javascript:" class="deleteCat">
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