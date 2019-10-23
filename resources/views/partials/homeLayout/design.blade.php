<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{config('app.name')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/ionicons.css')}}" rel="stylesheet">

</head>

<body>

@include('partials.homeLayout.header')

@yield('featured')


<!-- container -->


<section>
    <div class="container">
        <div class="row">
            @yield('content')

            @include('partials.homeLayout.sidebar')

        </div><!-- row -->
    </div><!-- container -->
</section>


@include('partials.homeLayout.footer')

<!-- SCIPTS -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="{{asset('js/tether.min.js')}}"></script>

<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>

