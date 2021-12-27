@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
   
        <div class="card-header">
            <h2>{{$users->name}} Profile</h2>
            
        </div>
         <div class="card-body">
         <a href="{{url('users')}}" class="btn btn-danger">back</a>
  </div>
</div>

</div>
@stop