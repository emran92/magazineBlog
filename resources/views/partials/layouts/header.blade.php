<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">{{config('app.name')}}</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>
        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach($categories->take(10) as $category)
            <a class="p-2 text-muted" href="#">{{$category->name}}</a>
        @endforeach
    </nav>
</div>

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        @foreach($posts->take(1) as $post)
            <h1 class="display-4 font-italic">{{$post->post->title}}</h1>
            <p class="lead my-3">{!! htmlspecialchars_decode(Str::words($post->post->body,10)) !!}</p>
            <p class="lead mb-0"><a href="{{$post->post->slug}}" class="text-white font-weight-bold">Continue reading...</a></p>
        @endforeach
    </div>
</div>