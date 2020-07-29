@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if ($user->country)
                        <p>Your country is: {{$user->country->name}}</p>
                    @endif
                    @if (count($user->roles)>0)
                    <strong>You have the following roles:</strong>
                    <ul>
                    @foreach ($user->roles as $role)
                    <li>{{$role->name}}</li>  
                    @endforeach
                    </ul>
                    @endif

                    @if (count($user->comments)>0)
                        <hr/>
                    <strong>You have the following comments:</strong>
                    <ul>
                    @foreach ($user->comments as $comment)
                    <li>{{$comment->body}}</li>  
                    @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
