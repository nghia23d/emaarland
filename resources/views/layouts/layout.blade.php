<!DOCTYPE html>
<html class="no-js" lang="vi">

@php
$theme = 'emaarland';
$versionCss = '1.0';
@endphp

<head>
    @include('layouts.head')
</head>

<body class="custom-scrollbar">

    <!--page start-->
    <div class="page">

        @include('elements.preload')

        @include('layouts.topbar')

        @include('elements.slider', ['data' => $data->slider])


        <!--site-main start-->
        <div class="site-main">

            @yield('content')

        </div>
        <!--site-main end-->


        @include('layouts.footer')


        <!--back-to-top start-->
        @include('elements.back_to_top')
        <!--back-to-top end-->

    </div><!-- page end -->

    @include('layouts.script')
</body>

</html>
