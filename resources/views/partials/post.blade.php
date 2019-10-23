@extends('partials.homeLayout.design')

@section('content')

    <div class="col-md-12 col-lg-8">
        <img src="{{asset('images/').'/'.$post->image}}" alt="">
        <h3 class="mt-30"><b>{{ $post->title }}</b></h3>
        <div class="float-left-right text-center mt-40 mt-sm-20">
            <ul class="mb-30 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
                @foreach($post->categories as $category)
                    <li><a href="{{'/post/category/'.$category->slug}}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <ul class="list-li-mr-20 mtb-15">
            <li>by <a href="#"><b>Admin</b></a> {{$post->created_at->diffForHumans()}}</li>
            {{--<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>--}}
            {{--<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>--}}
        </ul>

        {!! htmlspecialchars_decode($post->body) !!}


        <div class="float-left-right text-center mt-40 mt-sm-20">

            <ul class="mb-30 list-li-mt-10 list-li-mr-5 list-a-plr-15 list-a-ptb-7 list-a-bg-grey list-a-br-2 list-a-hvr-primary ">
                @foreach($post->tags as $tag)
                <li><a href="{{'/post/tag/'.$tag->slug}}">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
            <ul class="mb-30 list-a-bg-grey list-a-hw-radial-35 list-a-hvr-primary list-li-ml-5">
                <li class="mr-10 ml-0">Share</li>
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-google"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
            </ul>

        </div><!-- float-left-right -->

        <div class="brdr-ash-1 opacty-5"></div>

        <h4 class="p-title mt-50"><b>YOU MAY ALSO LIKE</b></h4>
        <div class="row">

            <div class="col-sm-6">
                <img src="images/crypto-news-2-600x450.jpg" alt="">
                <h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
                <ul class="list-li-mr-20 pt-10 mb-30">
                    <li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
                        Jan 25, 2018</li>
                    <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
                    <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
                </ul>
            </div><!-- col-sm-6 -->

            <div class="col-sm-6">
                <img src="images/crypto-news-1-600x450.jpg" alt="">
                <h4 class="pt-20"><a href="#"><b>2017 Market Performance: Crypto vs.Stock</b></a></h4>
                <ul class="list-li-mr-20 pt-10 mb-30">
                    <li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
                        Jan 25, 2018</li>
                    <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
                    <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
                </ul>
            </div><!-- col-sm-6 -->

        </div><!-- row -->

        <h4 class="p-title mt-20"><b>03 COMMENTS</b></h4>

        <div class="sided-70 mb-40">

            <div class="s-left rounded">
                <img src="images/profile-3-120x120.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right ml-100 ml-xs-85">
                <h5><b>Shuhein Chui, </b> <span class="font-8 color-ash">Nov 21, 2017</span></h5>
                <p class="mtb-15">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam.</p>
                <a class="btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5" href="#"><b>LIKE</b></a>
                <a class="btn-brdr-grey btn-b-sm plr-15 mt-5" href="#"><b>REPLY</b></a>
            </div><!-- s-right -->

        </div><!-- sided-70 -->

        <div class="sided-70 ml-100 ml-xs-20 mb-40">

            <div class="s-left rounded">
                <img src="images/profile-1-120x120.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right ml-100 ml-xs-85">
                <h5><b>Shuhein Chui, </b> <span class="font-8 color-ash">Nov 21, 2017</span></h5>
                <p class="mtb-10">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam.</p>
                <a class="btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5" href="#"><b>LIKE</b></a>
                <a class="btn-brdr-grey btn-b-sm plr-15 mt-5" href="#"><b>REPLY</b></a>
            </div><!-- s-right -->

        </div><!-- sided-70 -->

        <div class="sided-70 mb-50">

            <div class="s-left rounded">
                <img src="images/profile-2-120x120.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right ml-100 ml-xs-85">
                <h5><b>Shuhein Chui, </b> <span class="font-8 color-ash">Nov 21, 2017</span></h5>
                <p class="mt-10 mb-15">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam.</p>
                <a class="btn-brdr-grey btn-b-sm plr-15 mr-10" href="#"><b>LIKE</b></a>
                <a class="btn-brdr-grey btn-b-sm plr-15" href="#"><b>REPLY</b></a>
            </div><!-- s-right -->

        </div><!-- sided-70 -->

        <h4 class="p-title mt-20"><b>LEAVE A COMMENT</b></h4>

        <form class="form-block form-plr-15 form-h-45 form-mb-20 form-brdr-lite-white mb-md-50">
            <input type="text" placeholder="Your Name*:">
            <input type="text" placeholder="Your Email*:">
            <input type="text" placeholder="Your Phone*:">
            <textarea class="ptb-10" placeholder="Your Comment"></textarea>
            <button class="btn-fill-primary plr-30" rows="4" cols="50" type="submit"><b>LEAVE A COMMENT</b></button>
        </form>
    </div>
@endsection

