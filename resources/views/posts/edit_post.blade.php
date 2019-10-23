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
                        <form action="{{ url('/admin/posts/edit/'.$posts->id) }}" method="post" enctype="multipart/form-data">
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
                                        <div class="form-group" style="margin-top: 28px;">
                                            <label>Select Tag</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="tags[]" multiple="" data-placeholder="Select Tags" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}"
                                                    @foreach ($posts->tags as $postTag)
                                                        @if ($postTag->id == $tag->id)
                                                            selected
                                                        @endif
                                                     @endforeach
                                                    >{{$tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group" style="margin-top: 28px;">
                                            <label>Select Category</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="categories[]" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                            @foreach ($posts->categories as $postCategory)
                                                                @if ($postCategory->id == $category->id)
                                                                    selected
                                                                @endif
                                                            @endforeach
                                                    >{{$category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label">Image</label>
                                            <div class="controls">
                                                <input type="file" name="image" id="image">
                                                <input type="hidden" name="current_image" value="{{ $posts->image }}">
                                                @if(!empty($posts->image))
                                                    <img style="" src="{{ asset('images/'.$posts->image) }}" width="20%" height="20%">
                                                    | <a href="{{ url('/admin/posts/delete-posts-image/'.$posts->id) }}"> Delete Image</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="control-group">

                                            <div class="pull-left">
                                                <input readonly type="checkbox" name="status" id="status"
                                                       @if($posts->status == "1") checked @endif value="1"><span style="color: red; font-size: 25px;">  Publish ? (mark/unmark this)</span>
                                            </div>
                                            <br>
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
                                                        <textarea name="body" id="editor1"
                                                                  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$posts->body}}</textarea>
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

