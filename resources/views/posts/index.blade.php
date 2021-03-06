@extends('layouts.app')

@section('content')
        <h1>Posts</h1>
        @if(count($posts) > 0)
                <ul class="list-group">
                @foreach($posts as $post)
                                <li class="list-group-item mb-3">  <div class="well">
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Wirtter on {{$post->created_at}}</small>
                                        </div></li>
                @endforeach
                        {{$posts->links()}}
        @else
                <p>No posts found</p>
        @endif
@endsection