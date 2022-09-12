@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                
         <div class="card-header"> To-do Management
         <ul>
            <li><a href="{{url('add-post')}}"><i class="fa fa-microchip"></i> Add</a></li>
            <li><a href="{{url('post-list')}}"><i class="fa fa-microchip"></i> List</a></li>
        </ul>
        </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
