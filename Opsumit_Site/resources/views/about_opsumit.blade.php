@extends('layouts.master')

@section('title', 'About Opsumit')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>This is About Opsumit body content.</p>
@stop