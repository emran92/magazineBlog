<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{config('app.name')}} </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.tiny.cloud/1/c7p28zvaof9j6x83godgxxawatiywwe1orz9omb90w4tvjy5/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea',
        });
    </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    @include('layouts.admin_header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.admin_sidebar')

    <!-- Content Wrapper. Contains page content -->

    @yield('content')

    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('layouts.admin_footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('.myTable').DataTable();
    } );
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>