@extends('layouts.app')

@section('content')
<h1>Create an Article</h1>
{!! Form::open(['action'=>'ArticlesController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
   <div class="form-group">
       {{Form::label('title','Title')}}
       {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title text'])}}
   </div>
   <div class="form-group">

    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body text'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    <a class="btn btn-danger" href="/articles">Cancel</a>
{!! Form::close() !!}
@endsection