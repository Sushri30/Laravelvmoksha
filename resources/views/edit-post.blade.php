
@extends('layouts.app')

@section('content')
<div class="container mt-3">
<div><a href="{{url('post-list')}}" class="btn btn-info">Go Back</a></div>
  @if(Session::has('post_update'))
  <span>{{Session::get('post_update')}}</span>
  @endif
<form action="{{route('update.post')}}" method="post">
  @csrf
  <input type="hidden" value="{{$post->id}}" name="id">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$post->name}}">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Description</label>
    <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="description" value="{{$post->description}}">
  </div>
  <!-- <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection