@extends('layouts.layout')
@section('content')
{!! Form::open(['url'=>'posts','method'=>'post']) !!}
<div class="form-group">
<label for="title">Title</label>
{!! Form::text('title','',['placeholder'=>' Title...','required'])!!}
@error('title')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="from-group">
<label for="body">Body</label>
{!! Form::text('body','',['placeholder'=>'Body... ']) !!}
@error('body')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">submit</button>
{!! Form::Close()!!}  
@endsection
