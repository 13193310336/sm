@extends('admin.public.layout')

@section('body')
    <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.public.left')

            <!-- top navigation -->
            @include('admin.public.top')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            @include('admin.public.footer')
            <!-- /footer content -->
        </div>
    </div>
@endsection