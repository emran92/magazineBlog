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
                <li class="active">Edit Post</li>
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Edit Post</div>

                            <div class="card-body">
                                <form action="{{ url('posts/edit/'.$posts->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Post Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$posts->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Body</label>
                                        <textarea rows="5" class="form-control" name="body">{{$posts->body}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{$posts->slug}}">
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Image</label>
                                        <div class="controls">
                                            <input type="file" name="image" id="image">
                                            <input type="hidden" name="current_image" value="{{ $posts->image }}">
                                            @if(!empty($posts->image))
                                                <img style="width:250px;" src="{{ asset('images/'.$posts->image) }}">
                                                | <a href="{{ url('/posts/delete-posts-image/'.$posts->id) }}"> Delete Image</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Category</label>
                                        <select class="form-control" name="category_id" value="{{$posts->category_id}}">
                                            <option disabled value="">Select One</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection