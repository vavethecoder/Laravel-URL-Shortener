@extends('layouts.master')
@section('meta')
<title>Home Page</title>
@parent
@stop
@section('javascript')
@parent
<script src="js/ajax.js"></script>
@stop


@section('content')
<div class="row">
    <h2 class="form-signin-heading">Please Enter Full URL</h2>
    <!--{{ Form::open() }}-->
        <div class="col-md-10">
            <label for="inputEmail" class="sr-only">URL</label>
            <input id="url" name="url" type="url" class="form-control" placeholder="URL" required="" autofocus="">
        </div>
        <div class="col-md-2">
            <button id="save_url" name="save_url" type="submit" class="btn btn-primary btn-block">Create Url</button>
        </div>
        <div id="short_url" class="col-md-10"></div>
    <!--{{ Form::close() }}-->
</div>
@stop
