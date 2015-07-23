<!DOCTYPE html>
<html>
<head>
    @yield('title')

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="./css/app.css" rel="stylesheet" type="text/css">


    <script src="./js/opsumit.js"></script>
</head>
<body>
<div class="container">

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

    @yield('content')

    @section("sections")
        @include('pages.partial.home_section1')
    @show

</div>
</body>
</html>