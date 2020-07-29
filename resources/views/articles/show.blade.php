@extends('layouts.app')
@section('content')
<a href="/articles" class="btn btn-outline-secondary  m-3">Go Back</a>
    <h1>{{$article->title}}</h1>        
    <br/>
    <div>
        {!!$article->body!!}
    </div>
    <hr>
    <small>Written on {{$article->created_at}} by {{$article->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if ((Auth::user())==$article->user)                    
        <a href="/articles/{{$article->id}}/edit" class="btn btn-secondary">Edit</a>
        {!!Form::open(['action'=>['ArticlesController@destroy',$article->id],'method'=>'POST','class'=>'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif

    @if (count($article->comments)>0)
        <hr/>
    <strong>Comments:</strong>
    <ul>
    @foreach ($article->comments as $comment)
    <li>{{$comment->body}}</li>  
    @endforeach
    </ul>
    @endif
@endsection