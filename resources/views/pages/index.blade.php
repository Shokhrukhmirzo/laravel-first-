@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to CookMe blog</h1>
        <p>This is the chef website where You can create your own account and teach people how to cook</p>
        <p><a href="/login" class="btn btn-primary btn-lg">Login</a><a href="/register" class="btn btn-success btn-lg ml-1">Register</a></p>
    </div>
@endsection
