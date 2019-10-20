@extends('layouts.admin_design')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin
                <small>> Categories</small>
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
                            <div class="card-header">All Posts</div>
                            <div class="card-body">
                                <table class="table myTable">
                                    <thead>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td><a href="{{ url('/categories/edit/'.$category->id) }}"><button class="btn btn-warning" type="submit">Edit</button></a></td>
                                            <td><button class="btn btn-danger" type="submit">Delete</button></td>
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