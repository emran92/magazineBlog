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
                            <div class="card-header">All Posts
                                <div class="" style="float:right">
                                    <a href="{{url('admin/posts/create')}}" target="_blank">
                                        <button class="btn btn-large btn-primary">Add Post</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table myTable">
                                    <thead>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->subtitle}}</td>
                                            <td>{{$post->slug}}</td>
                                            {{--<td>{{$post->body}}</td>--}}
                                            <td class="center"><input disabled="" type="checkbox" name="status" id="status" @if($post->status == "1") checked @endif value="1"></td>
                                            <td>{{$post->created_at->diffForHumans()}}</td>
                                            <td>{{$post->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ url('admin/posts/view/'.$post->id) }}" target="_blank">
                                                    <span class="fa fa-eye" style="font-size: 35px;"></span></a>
                                                <a href="{{ url('admin/posts/edit/'.$post->id) }}" target="_blank">
                                                <span class="fa fa-edit" style="font-size: 35px;"></span></a>
                                                <a rel="{{ $post->id }}"
                                                   rel1="delete-posts" href="javascript:" class="deletePost">
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