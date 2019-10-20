<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('images/image1.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info" style="position:relative;">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>

        <!-- search form (Optional) -->
    {{--<form action="#" method="get" class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
    {{--</button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Category</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('categories')}}">View All Categories</a></li>
                    <li><a href="{{route('categories.create')}}">Add New Category</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Posts</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('posts')}}">View All Posts</a></li>
                    <li><a href="{{route('posts.create')}}">Add New Post</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Tags</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('tags')}}">View All Tags</a></li>
                    <li><a href="{{route('tags.create')}}">Add New Tag</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>