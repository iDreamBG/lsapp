@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!!  Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}

        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {!!  Form::close() !!}

@endsection