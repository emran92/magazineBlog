<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>

    <div class="p-4">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">
            @foreach($categories as $category)
                <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
            @endforeach
        </ol>
    </div>

    <div class="p-4">
        <h4 class="font-italic">Tags</h4>
        <ol class="list-unstyled">
            @foreach($tags as $tag)
                <li><a href="{{$tag->slug}}">{{$tag->name}}</a></li>
            @endforeach
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->