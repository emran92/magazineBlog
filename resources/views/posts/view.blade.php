<html>
<head>
    <style>
        li{ list-style: none; line-height: 1.6; font-size: .9em;}
        .list-block > li{ display: block; }
        .list-relative > li{ position: relative; }
        .list-a-block > li > a{ display: block; }

        .list-btm-border-white > li{ border-bottom: 1px solid #fff; }

        .list-a-bg-grey > li > a{ background: #EBEBEB; }

        .list-a-br-2  > li > a { border-radius: 2px; }

        .list-a-hw-radial-35 > li > a{ height: 35px; width: 35px; border-radius: 35px; line-height: 35px; }

        .list-a-hvr-primary > li > a:hover{ background: #0046b5; color: #fff; }
        .list-a-p-0  > li > a{ padding:  0px; }
        .list-a-p-5  > li > a{ padding:  5px; }
        .list-a-p-10 > li > a{ padding: 10px; }
        .list-a-p-15 > li > a{ padding: 15px; }
        .list-a-p-20 > li > a{ padding: 20px; }
        .list-a-p-25 > li > a{ padding: 25px; }
        .list-a-p-30 > li > a{ padding: 30px; }

        .list-a-plr-0  > li > a{ padding-left:  0px; padding-right:  0px; }
        .list-a-plr-5  > li > a{ padding-left:  5px; padding-right:  5px; }
        .list-a-plr-10 > li > a{ padding-left: 10px; padding-right: 10px; }
        .list-a-plr-15 > li > a{ padding-left: 15px; padding-right: 15px; }
        .list-a-plr-20 > li > a{ padding-left: 20px; padding-right: 20px; }
        .list-a-plr-25 > li > a{ padding-left: 25px; padding-right: 25px; }
        .list-a-plr-30 > li > a{ padding-left: 30px; padding-right: 30px; }

        .list-a-pr-0  > li > a{ padding-right: 0px; }
        .list-a-pr-5  > li > a{ padding-right: 5px; }
        .list-a-pr-10 > li > a{ padding-right: 10px; }
        .list-a-pr-15 > li > a{ padding-right: 15px; }
        .list-a-pr-20 > li > a{ padding-right: 20px; }
        .list-a-pr-25 > li > a{ padding-right: 25px; }
        .list-a-pr-30 > li > a{ padding-right: 30px; }

        .list-a-pl-0  > li > a{ padding-left:  0px; }
        .list-a-pl-5  > li > a{ padding-left:  5px; }
        .list-a-pl-10 > li > a{ padding-left: 10px; }
        .list-a-pl-15 > li > a{ padding-left: 15px; }
        .list-a-pl-20 > li > a{ padding-left: 20px; }
        .list-a-pl-25 > li > a{ padding-left: 25px; }
        .list-a-pl-30 > li > a{ padding-left: 30px; }

        .list-a-ptb-0  > li > a{ padding-top:  0px; padding-bottom:  0px; }
        .list-a-ptb-5  > li > a{ padding-top:  5px; padding-bottom:  5px; }
        .list-a-ptb-10 > li > a{ padding-top: 10px; padding-bottom: 10px; }
        .list-a-ptb-15 > li > a{ padding-top: 15px; padding-bottom: 15px; }
        .list-a-ptb-20 > li > a{ padding-top: 20px; padding-bottom: 20px; }
        .list-a-ptb-25 > li > a{ padding-top: 25px; padding-bottom: 25px; }
        .list-a-ptb-30 > li > a{ padding-top: 30px; padding-bottom: 30px; }

        .list-a-ptb-7 > li > a{ padding-top: 7px; padding-bottom: 7px; }
        .list-a-ptb-8 > li > a{ padding-top: 8px; padding-bottom: 8px; }

        .list-a-pt-0  > li > a{ padding-top:  0px; }
        .list-a-pt-5  > li > a{ padding-top:  5px; }
        .list-a-pt-10 > li > a{ padding-top: 10px; }
        .list-a-pt-15 > li > a{ padding-top: 15px; }
        .list-a-pt-20 > li > a{ padding-top: 20px; }
        .list-a-pt-25 > li > a{ padding-top: 25px; }
        .list-a-pt-30 > li > a{ padding-top: 30px; }

        .list-a-pb-0  > li > a{ padding-bottom:  0px; }
        .list-a-pb-5  > li > a{ padding-bottom:  5px; }
        .list-a-pb-10 > li > a{ padding-bottom: 10px; }
        .list-a-pb-15 > li > a{ padding-bottom: 15px; }
        .list-a-pb-20 > li > a{ padding-bottom: 20px; }
        .list-a-pb-25 > li > a{ padding-bottom: 25px; }
        .list-a-pb-30 > li > a{ padding-bottom: 30px; }


        .list-li-mlr-0  > li{ margin-left:  0px; margin-right:  0px; }
        .list-li-mlr-5  > li{ margin-left:  5px; margin-right:  5px; }
        .list-li-mlr-10 > li{ margin-left: 10px; margin-right: 10px; }
        .list-li-mlr-15 > li{ margin-left: 15px; margin-right: 15px; }
        .list-li-mlr-20 > li{ margin-left: 20px; margin-right: 20px; }
        .list-li-mlr-25 > li{ margin-left: 25px; margin-right: 25px; }
        .list-li-mlr-30 > li{ margin-left: 30px; margin-right: 30px; }

        .list-li-mtb-0  > li{ margin-top:  0px; margin-bottom:  0px; }
        .list-li-mtb-5  > li{ margin-top:  5px; margin-bottom:  5px; }
        .list-li-mtb-10 > li{ margin-top: 10px; margin-bottom: 10px; }
        .list-li-mtb-15 > li{ margin-top: 15px; margin-bottom: 15px; }
        .list-li-mtb-20 > li{ margin-top: 20px; margin-bottom: 20px; }
        .list-li-mtb-25 > li{ margin-top: 25px; margin-bottom: 25px; }
        .list-li-mtb-30 > li{ margin-top: 30px; margin-bottom: 30px; }

        .list-li-mr-0  > li{ margin-right:  0px; }
        .list-li-mr-5  > li{ margin-right:  5px; }
        .list-li-mr-10 > li{ margin-right: 10px; }
        .list-li-mr-15 > li{ margin-right: 15px; }
        .list-li-mr-20 > li{ margin-right: 20px; }
        .list-li-mr-25 > li{ margin-right: 25px; }
        .list-li-mr-30 > li{ margin-right: 30px; }

        .list-li-ml-0  > li{ margin-left:  0px; }
        .list-li-ml-5  > li{ margin-left:  5px; }
        .list-li-ml-10 > li{ margin-left: 10px; }
        .list-li-ml-15 > li{ margin-left: 15px; }
        .list-li-ml-20 > li{ margin-left: 20px; }
        .list-li-ml-25 > li{ margin-left: 25px; }
        .list-li-ml-30 > li{ margin-left: 30px; }

        .list-li-mt-0  > li{ margin-top:  0px; }
        .list-li-mt-5  > li{ margin-top:  5px; }
        .list-li-mt-10 > li{ margin-top: 10px; }
        .list-li-mt-15 > li{ margin-top: 15px; }
        .list-li-mt-20 > li{ margin-top: 20px; }
        .list-li-mt-25 > li{ margin-top: 25px; }
        .list-li-mt-30 > li{ margin-top: 30px; }

        .list-li-mb-0  > li{ margin-bottom:  0px; }
        .list-li-mb-5  > li{ margin-bottom:  5px; }
        .list-li-mb-10 > li{ margin-bottom: 10px; }
        .list-li-mb-15 > li{ margin-bottom: 15px; }
        .list-li-mb-20 > li{ margin-bottom: 20px; }
        .list-li-mb-25 > li{ margin-bottom: 25px; }
        .list-li-mb-30 > li{ margin-bottom: 30px; }


        .list-li-plr-0  > li{ padding-left:  0px; padding-right:  0px; }
        .list-li-plr-5  > li{ padding-left:  5px; padding-right:  5px; }
        .list-li-plr-10 > li{ padding-left: 10px; padding-right: 10px; }
        .list-li-plr-15 > li{ padding-left: 15px; padding-right: 15px; }
        .list-li-plr-20 > li{ padding-left: 20px; padding-right: 20px; }
        .list-li-plr-25 > li{ padding-left: 25px; padding-right: 25px; }
        .list-li-plr-30 > li{ padding-left: 30px; padding-right: 30px; }

        .list-li-ptb-0  > li{ padding-top:  0px; padding-bottom:  0px; }
        .list-li-ptb-5  > li{ padding-top:  5px; padding-bottom:  5px; }
        .list-li-ptb-10 > li{ padding-top: 10px; padding-bottom: 10px; }
        .list-li-ptb-15 > li{ padding-top: 15px; padding-bottom: 15px; }
        .list-li-ptb-20 > li{ padding-top: 20px; padding-bottom: 20px; }
        .list-li-ptb-25 > li{ padding-top: 25px; padding-bottom: 25px; }
        .list-li-ptb-30 > li{ padding-top: 30px; padding-bottom: 30px; }

        .list-li-pr-0  > li{ padding-right:  0px; }
        .list-li-pr-5  > li{ padding-right:  5px; }
        .list-li-pr-10 > li{ padding-right: 10px; }
        .list-li-pr-15 > li{ padding-right: 15px; }
        .list-li-pr-20 > li{ padding-right: 20px; }
        .list-li-pr-25 > li{ padding-right: 25px; }
        .list-li-pr-30 > li{ padding-right: 30px; }

        .list-li-pl-0  > li{ padding-left:  0px; }
        .list-li-pl-5  > li{ padding-left:  5px; }
        .list-li-pl-10 > li{ padding-left: 10px; }
        .list-li-pl-15 > li{ padding-left: 15px; }
        .list-li-pl-20 > li{ padding-left: 20px; }
        .list-li-pl-25 > li{ padding-left: 25px; }
        .list-li-pl-30 > li{ padding-left: 30px; }

        .list-li-pt-0  > li{ padding-top:  0px; }
        .list-li-pt-5  > li{ padding-top:  5px; }
        .list-li-pt-10 > li{ padding-top: 10px; }
        .list-li-pt-15 > li{ padding-top: 15px; }
        .list-li-pt-20 > li{ padding-top: 20px; }
        .list-li-pt-25 > li{ padding-top: 25px; }
        .list-li-pt-30 > li{ padding-top: 30px; }

        .list-li-pb-0  > li{ padding-bottom:  0px; }
        .list-li-pb-5  > li{ padding-bottom:  5px; }
        .list-li-pb-10 > li{ padding-bottom: 10px; }
        .list-li-pb-15 > li{ padding-bottom: 15px; }
        .list-li-pb-20 > li{ padding-bottom: 20px; }
        .list-li-pb-25 > li{ padding-bottom: 25px; }
        .list-li-pb-30 > li{ padding-bottom: 30px; }
    </style>
</head>
</html>
@extends('layouts.admin_design')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{--Admin--}}
                {{--<small>Dashboard</small>--}}
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
                <div class="col-md-12 col-lg-8">
                    <img class="" src="{{asset('images/').'/'.$posts->image}}" alt="">
                    <div class="float-right">
                        <ul class="mb-30 list-a-hw-radial-35 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
                            <h3>Categories: </h3><br> @foreach($posts->categories as $category)
                                <li style="display: inline-block; font-size: 20px;"><a href="{{'/post/category/'.$category->slug}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                        <br>
                        <ul class="mb-30 list-a-hw-radial-35 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
                            <h3>Tags: </h3><br> @foreach($posts->tags as $tag)
                                <li style="display: inline-block; font-size: 20px;"><a href="{{'/post/tag/'.$tag->slug}}">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                        <br>
                        <ul class="mb-30 list-a-hw-radial-35 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
                            <a href="{{ url('admin/posts/edit/'.$posts->id) }}" target="_blank">
                                <span class="fa fa-edit" style="font-size: 45px;"> EDIT</span></a>
                        </ul>
                    </div>
                    <h1 class="mt-30"><b>{{ $posts->title }}</b></h1>
                    <h3 class="mt-30"><b>{{ $posts->subtitle }}</b></h3>
                    <ul class="list-li-mr-20 mtb-15">
                        <li>by <a href="#"><b>Admin</b></a> {{$posts->created_at->diffForHumans()}}</li>
                        {{--<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>--}}
                        {{--<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>--}}
                    </ul>

                    {!! htmlspecialchars_decode($posts->body) !!}

                    <div class="float-left-right text-center mt-40 mt-sm-20">



                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection

