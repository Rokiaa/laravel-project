@extends('layouts.layout')
@section('content')
<center><a class="btn btn-success ml-5" href="{{ route('posts.create') }}" id="createNewItem"> New</a></center>
<table border=2 align="center">
<thead>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Body</th>
<th scope="col">User Id</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
<th scope="col">Show</th>
</thead>
<tbody>
@foreach ($posts as $post)
<tr>
<th scope="row">{{$post->id}}</th>
<td>{{$post->title}}</td>
<td>{{$post->body}}</td>
<td>{{$post->user_id}}</td>
<td><a href="{{route('posts.edit',$post->id)}}">Edit </a></td>
<td>
{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete'])!!}
<button type="submit" class="btn btn-primary">Delete</button> 
{!! Form::close()!!}</td>
<td><a href="{{route('posts.show',$post->id)}}">Show </a></td>
</tr>
@endforeach

</tbody>
</table>
@endsection
