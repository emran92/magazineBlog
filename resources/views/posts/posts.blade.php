@extends('layouts.admin_design')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin
                <small>Dashboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">All posts</li>
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
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Slug</th>
                                    <th>Body</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->subtitle}}</td>
                                            <td>{{$post->slug}}</td>
                                            <td>{{$post->body}}</td>
                                            <td><img src="{{ asset('images/'.$post->image)}}" width="40" height="40"></td>
                                            <td class="center"><input disabled="" type="checkbox" name="status" id="status" @if($post->status == "1") checked @endif value="1"></td>
                                            <td><a href="{{ url('/posts/edit/'.$post->id) }}"><button class="btn btn-warning" type="submit">Edit</button></a></td>
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