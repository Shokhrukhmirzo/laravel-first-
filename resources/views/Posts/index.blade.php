@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post )
        <div class="py-2 my-4 px-2 card bg-light">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
