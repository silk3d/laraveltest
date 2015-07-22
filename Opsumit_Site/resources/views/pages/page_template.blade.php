@extends('app')

@section('title')
    <title>{{$pageTitle}}</title>
@stop

@section('nav')

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

@stop

@section('content')
<div class="content">
    <div class="title">{{$pageTitle}}</div>
</div>
@stop
