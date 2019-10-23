@extends('partials.homeLayout.design')

@section('featured')
    <div class="container">
        <div class="h-500x h-sm-auto">
            <div class="h-1-3 overflow-hidden">
                @foreach($posts->take(9) as $post)
                <div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
                    <a class="pos-relative h-100 dplay-block" href="{{'/post/'.$post->post->slug}}">

                        <img src="{{asset('images/').'/'.$post->post->image}}" width="100%" height="100%" >

                        <div class="abs-blr color-white p-5 bg-sm-color-7" style="background: rgba(0,0,0,.5)">
                            <h4 class="mb-10 mb-sm-5"><b>{{$post->post->title}}</b></h4>
                            <ul class="list-li-mr-20">
                                <li>by <span class="color-primary"><b>Admin</b></span> {{$post->created_at->diffForHumans()}}</li>
                            </ul>
                        </div><!--abs-blr -->
                    </a><!-- pos-relative -->
                </div><!-- w-1-3 -->
                @endforeach
            </div><!-- h-2-3 -->
        </div><!-- h-100vh -->
    </div>
@endsection
@section('content')
    <div class="col-md-12 col-lg-8">
        <h4 class="p-title mt-30"><b>STORIES</b></h4>
        <div class="row">
            @foreach($allPosts as $allPost)
            <div class="col-sm-6">
                <a href="{{'/post/'. $allPost->slug}}">
                <img src="{{asset('images/').'/'.$allPost->image}}" alt="" width="30%" height="100%">
                    <h4 class="pt-20"><b>{{$allPost->title}}<br/>{{$allPost->subtitle}}</b></h4></a>
                <ul class="list-li-mr-20 pt-10 mb-30">
                    <li class="color-lite-black">by <a href="#" class="color-black"><b>Admin</b></a>
                        {{$allPost->created_at->diffForHumans()}}</li>
                    <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
                    <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
                </ul>
            </div><!-- col-sm-6 -->
            @endforeach
        </div><!-- row -->

        <ul class="pager">
            <li class="next">
                {{ $allPosts->links() }}
            </li>
        </ul>

        {{--<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE CRYPTO MINING EVENTS</b></a>--}}
    </div><!-- col-md-9 -->
@endsection