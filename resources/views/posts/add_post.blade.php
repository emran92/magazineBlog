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
                <li class="active">Add New Post</li>
            </ol>
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
                            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Post Title</label>
                                                <input required type="text" class="form-control" id="text" name="title" placeholder="Enter Post Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Post Subtitle</label>
                                                <input required type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter SubTitle">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Post Slug</label>
                                                <input required type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug here">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <br>
                                            <div class="pull-right">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Post Image</label>
                                                    <input type="file" name="image" id="image">
                                                </div>
                                            </div>

                                            <div class="checkbox pull-left">
                                                    <input type="checkbox" name="status" id="status" value="1"> Publish
                                            </div>
                                            <br>
                                            <div class="form-group" style="margin-top: 28px;">
                                                <label>Select Tag</label>
                                                <select class="form-control select2 select2-hidden-accessible" name="tags[]" multiple="" data-placeholder="Select Tags" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    @foreach($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{$tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group" style="margin-top: 28px;">
                                                <label>Select Category</label>
                                                <select class="form-control select2 select2-hidden-accessible" name="categories[]" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{$category->name }}</option>
                                                    @endforeach
                                                </select>
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
                                                        <textarea name="body" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                    </div>
                                                </div>
                                            </div></div>
                                    </div>
                                    </div>
                                        <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button onclick="closeCurrentTab()" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>

@endsection

