@extends('app')

@section('title')
    <title>{{$pageTitle}}</title>
@stop


@section('content')
<div class="content">
    <div class="title">{{$pageTitle}}</div>
</div>
@stop

@yield('section1')