@extends('partials.layouts.design')

@section('featured')
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        Featured
    </h3>
    <div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{$post->post->title}}</strong>
                        <h3 class="mb-0">{{$post->post->subtitle}}</h3>
                        <div class="mb-1 text-muted">{{$post->post->created_at->diffForHumans()}}</div>
                        <p class="card-text mb-auto">{!! htmlspecialchars_decode(Str::words($post->post->body,10)) !!}</p>
                        <a href="{{'post/'.$post->post->slug}}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" src="{{asset('images/').'/'.$post->post->image}}" alt="image"
                             height="150px" width="150px">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('content')
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        All Posts
    </h3>
    <div class="row mb-2">
        @foreach($allPosts->take(10) as $allPost)
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-relative">
                        <h1 class="d-inline-block mb-4 text-primary">{{$allPost->title}}</h1>
                        <h4 class="mb-0">{{$allPost->subtitle}}</h4>
                        <div class="mb-1 text-muted">{{$allPost->created_at->diffForHumans()}}</div>
                        <p class="card-text mb-auto">{!! htmlspecialchars_decode(Str::words($allPost->body,10)) !!}</p>
                        <a href="{{'/post/'. $allPost->slug}}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" src="{{asset('images/').'/'.$allPost->image}}" alt="image"
                             height="120px" width="120px">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
    </nav>
@endsection

<div class="row mb-2">
    @foreach($allPosts->take(10) as $allPost)
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="item item-0 item-first">

            <div class="thumbnail"><a href="" class="item-thumbnail">
                    <img src="{{asset('images/').'/'.$allPost->image}}" w="200" h="106" style="margin-left: 37.963px;"></a></div>

                <div class="clear"></div>
            <h3 class="title"><a href="">{{$allPost->title}}</a></h3>
            <div class="meta meta-2"><i class="icon"></i><span>{{$allPost->created_at->diffForHumans()}}</span>
                <div class="clear"></div>
            </div>
            <p class="excerpt">{!! htmlspecialchars_decode(Str::words($allPost->body,10)) !!}</p>

            </div>
            </div>
        </div>
    @endforeach
</div>

