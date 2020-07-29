@extends('layouts.app')

@section('content')
<h1>Articles Index</h1>
    @if (count($articles)>0)
        @foreach ($articles as $article)
        <div class="card p-4 mb-3">
            <div class="row no-gutters">
                    <div class="card-block px-2">
                        <h3 class="card-title"><a href="/articles/{{$article->id}}">{{$article->title}}</a> </h3>
                        <small class="card-text">Written on {{$article->created_at}} by {{$article->user->name}}</small>
                    </div>
            </div>
        </div>
        @endforeach
        {{$articles->links()}}
    @else 
    <p>No articles found</p>
    @endif
@endsection