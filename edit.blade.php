@extends('layouts.layout')
@section('content')
{!! Form::open(['route'=>['posts.update',$post->id],'method'=>'put'])!!}
<div class="form-group">
<label for="title">Title</label>
{!! Form::text('title',$post->title,['placeholder'=>'Title..'])!!}
@error('title')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="from-group">
<lavel for="body">Body</label>
{!! Form::text('body',$post->body,['placeholder'=>'Body...'])!!}
@error('body')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close()!!}
@endsection