@extends('app')

@section('title')
    <title>{{$pageTitle}}</title>
@stop

@section('nav')
<ul>
    <li class="nav" onclick="gotoPage('/')">Home</li>
    <li class="nav" onclick="gotoPage('/seraphin_study')">Seraphin Study | </li>
    <li class="nav" onclick="gotoPage('/safety_profile')">Safety Profile | </li>
    <li class="nav" onclick="gotoPage('/about')">About | </li>
    <li class="nav" onclick="gotoPage('/prescribing')">Prescribing | </li>
    <li class="nav" onclick="gotoPage('/services')">Services and Support | </li>
    <li class="nav" onclick="gotoPage('/resources')">PAH Resources</li>
</ul>
<br/>
@stop

@section('content')
<div class="content">
    <div class="title">{{$pageTitle}}</div>
</div>
@stop
