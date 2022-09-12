
@extends('layouts.app')

@section('content')
<div class="container mt-3">
<div><a href="{{url('home')}}" class="btn btn-info">Go Back</a></div>
<div style="float:right"><a href="{{url('post-list')}}" class="btn btn-success">List</a></div>
  @if(Session::has('post_add'))
  <span>{{Session::get('post_add')}}</span>
  @endif
<form action="{{route('save.post')}}" method="post">
  @csrf
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Description</label>
    <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="description">
  </div>
  <!-- <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection