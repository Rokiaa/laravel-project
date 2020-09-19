@extends('layouts.layout')
@section('content')
<ul>
<li>ID={{$post->id}}</li>
<li>Title={{$post->title}}</li>
<li>Body={{$post->body}}</li>
</ul>
<a href="{{route('posts.index')}}">Back</a>
@endsection