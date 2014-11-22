@extends('layouts.master')

@section('head')
<title>Url Redirection</title>
@parent
@stop

@section('content')
<div class="row">
    <!--@if (empty($urlExist))-->
        <h2 class="form-signin-heading">Their is something wrong...</h2>
<!--    @else
        <h2 class="form-signin-heading">You are redirecting shortly...</h2>
        <h3 class="form-signin-heading">Redirect to <a href="{{ $urlExist->url }}">{{ $urlExist->url }}</a></h3>
    @endif-->
</div>
@stop
