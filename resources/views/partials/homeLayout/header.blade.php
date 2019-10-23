<header>
    <div class="bg-191">
        <div class="container">
            <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">

                <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
                    <li><a class="pl-0 pl-sm-10" href="#">About</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Submit Press Release</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                    <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-google"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
                </ul>

            </div><!-- top-menu -->
        </div><!-- container -->
    </div><!-- bg-191 -->

    <div class="container">
        <a class="logo" href="{{route('user.home')}}"><img src="{{asset('images/laravel.png')}}" alt="Logo"></a>

        <a class="right-area src-btn" href="#" >
            <i class="active src-icn ion-search"></i>
            <i class="close-icn ion-close"></i>
        </a>
        <div class="src-form">
            <form>
                <input type="text" placeholder="Search here">
                <button type="submit"><i class="ion-search"></i></button>
            </form>
        </div><!-- src-form -->

        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

        <ul class="main-menu" id="main-menu">
            <li><a href="{{'/post/tag/popular'}}">POPULAR</a></li>
            <li class="drop-down"><a href="{{'/post/category/technologies'}}">TECHNOLOGIES<i class="ion-arrow-down-b"></i></a>
                <ul class="drop-down-menu drop-down-inner">
                    <li><a href="{{'/post/category/laptops'}}">LAPTOPS</a></li>
                    <li><a href="{{'/post/category/mobiles'}}">MOBILE</a></li>
                </ul>
            </li>
            <li><a href="{{'/post/category/sports'}}">SPORTS</a></li>
            <li><a href="{{'/post/category/events'}}">EVENTS</a></li>
            <li><a href="{{'/post/category/politics'}}">POLITICS</a></li>
        </ul>
        <div class="clearfix"></div>
    </div><!-- container -->
</header>