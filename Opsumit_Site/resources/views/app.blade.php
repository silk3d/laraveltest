<!DOCTYPE html>
<html>
<head>
    @yield('title')

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>

    <script src="{{ URL::asset('js/isi_scroll.lib.js') }}"></script>
    <script src="{{ URL::asset('js/opsumit.js') }}"></script>
</head>
<body>

@include("shared.navigation")

<div id="landing_page_content_wrapper">
    <div id="landing_page_content"></div>

    @yield('content')

</div>
<div>

<a id="isi_anchor_style" name="isi_anchor">&nbsp;</a>

<div class="isi_outer desktop">
    <div class="isi_inner">
        @include('shared.isi')
    </div>
</div>

</body>
</html>