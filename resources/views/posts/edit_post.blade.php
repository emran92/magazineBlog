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
                <li class="active">Add New Post</li>
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
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Post</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="{{ url('posts/edit/'.$posts->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Post Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$posts->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Post Subtitle</label>
                                            <input type="text" name="subtitle" class="form-control" value="{{$posts->subtitle}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Post Slug</label>
                                            <input type="text" name="slug" class="form-control" value="{{$posts->slug}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label">Image</label>
                                            <div class="controls">
                                                <input type="file" name="image" id="image">
                                                <input type="hidden" name="current_image" value="{{ $posts->image }}">
                                                @if(!empty($posts->image))
                                                    <img style="" src="{{ asset('images/'.$posts->image) }}" width="30%" height="30%">
                                                    | <a href="{{ url('/posts/delete-posts-image/'.$posts->id) }}"> Delete Image</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Publish</label>
                                            <div class="controls">
                                                <input readonly type="checkbox" name="status" id="status" @if($posts->status == "1") checked @endif value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12"><div class="form-group">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Post Body
                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="pull-right box-tools">
                                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body pad">
                                                        <textarea class="textarea" name="body" id="body" placeholder="Place some text here"
                                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$posts->body}}</textarea>
                                                </div>
                                            </div>
                                        </div></div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection