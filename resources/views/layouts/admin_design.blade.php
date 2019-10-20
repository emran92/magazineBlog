<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{config('app.name')}} </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    {{--<script src="https://cdn.tiny.cloud/1/c7p28zvaof9j6x83godgxxawatiywwe1orz9omb90w4tvjy5/tinymce/5/tinymce.min.js"></script>--}}
    {{--<script>--}}
        {{--tinymce.init({--}}
            {{--selector:'textarea',--}}
        {{--});--}}
    {{--</script>--}}
    <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="{{ asset('js/select2.full.js') }}"></script>


<script>
    $(document).ready( function () {
        $('.myTable').DataTable();
    } );
</script>
@include('sweetalert::alert')
<script>
    $(document).ready(function() {
        $(document).on('click','.deleteCat',function(e){
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                title: "Are you sure you want delete Category?",   text: "You will not be able to recover this category!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function(){
                swal({
                        title: "Deleted!",
                        text: "Category has been deleted.",
                        type: "success",
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1000
                    },
                    function(){
                        window.location.href="/categories/"+deleteFunction+"/"+id;
                    })
            });
        });

        $(document).on('click','.deletePost',function(e){
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                title: "Are you sure you want to delete this Post?",   text: "You will not be able to recover this post!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function(){
                swal({
                        title: "Deleted!",
                        text: "Post has been deleted.",
                        type: "success",
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1000
                    },
                    function(){
                        window.location.href="/posts/"+deleteFunction+"/"+id;
                    })
            });
        });

        $(document).on('click','.deleteTag',function(e){
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                title: "Are you sure you want to delete this Tag?",   text: "You will not be able to recover this tag!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function(){
                swal({
                        title: "Deleted!",
                        text: "Tag has been deleted.",
                        type: "success",
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1000
                    },
                    function(){
                        window.location.href="/tags/"+deleteFunction+"/"+id;
                    })
            });
        });
    });
</script>

<script type="text/javascript">
    function closeCurrentTab(){
        close();
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

<script>
    $(document).ready(function() {
        $('.multi2').select2();
    });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

<script>
    CKEDITOR.replace( 'editor1' );
</script>

</body>
</html>