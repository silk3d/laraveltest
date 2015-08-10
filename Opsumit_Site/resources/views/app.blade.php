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

@yield('title')

<div class="container">
    <div class="home_background">Should be a background image</div>

    @yield('content')


    @if (count($navItems))
        <ul>
            @foreach($navItems as $navItem)
                <li class="nav" onclick="gotoPage('{{$navItem['target']}}')">{{$navItem['name']}}</li>
                @if ($navItem['target'] != "/resources")
                    &nbsp;|&nbsp;

                @endif
            @endforeach
        </ul>
    @else
        <p>No Menu items exist.</p>
    @endif

        @yield('sections')

</div>


</body>
</html>