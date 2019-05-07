@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-success">Go back</a>

    @if($post)
        <h3>{{$post->title}}</h3>
        <div>
        <p>{!! $post->body !!}</p>
        </div>
        <small>Written on {{$post->created_at}}</small>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
         {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class' => 'pull-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    @else
        <p>No posts found</p>
    @endif
@endsection