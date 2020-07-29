@extends('layouts.app')
@section('content')

<h1>Articles of: {{$country->name}}</h1>
    @if (count($country->articles)>0)
        @foreach ($country->articles as $article)
        <div class="card p-4 mb-3">
            <div class="row no-gutters">
                    <div class="card-block px-2">
                        <h3 class="card-title"><a href="/articles/{{$article->id}}">{{$article->title}}</a> </h3>
                        <small class="card-text">Written on {{$article->created_at}} by {{$article->user->name}}</small>
                    </div>
            </div>
        </div>
        @endforeach
    @else 
    <p>No articles found</p>
    @endif
@endsection