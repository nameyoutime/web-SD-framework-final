@extends('layouts.app')
@section('content')
    <ul>
        @foreach($articles as $article)
            <li>{{$article->title}}</li>
            @foreach($article->tags as $tag)
                {{$tag->list}},

            @endforeach

        @endforeach
    </ul>
@endsection
