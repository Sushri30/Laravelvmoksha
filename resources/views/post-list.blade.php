@extends('layouts.app')

@section('content')
<div class="container mt-3">
<div><a href="{{url('home')}}" class="btn btn-info">Go Back</a></div>
    <div style="float:right"><a href="{{url('add-post')}}" class="btn btn-success">Add New</a></div></br>
    @if(Session::has('post_delete'))
  <span>{{Session::get('post_delete')}}</span>
  @endif
<div class="table-responsive-sm ">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Post</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
       
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->name}}</td>
        <td>{{$post->description}}</td>
        <td>
        <a href="/edit-post/{{$post->id}}" class="btn btn-warning">Edit</a>
        <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
  @endsection