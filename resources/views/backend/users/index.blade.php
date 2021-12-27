@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    @if(Session::has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulation</strong> {{Session::get("success")}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    <div class="card">
        <div class="card-header">
            <h2>Users</h2>
            <a href="{{url('users/create')}}" class="btn btn-primary float-right">Add User</a>
        </div>
         <div class="card-body">
    <table class="table table-bordered">
     <thead>
         <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Department</th>
             <th>Action</th>
         </tr>
     </thead>

     <tbody>
         @foreach($users as $user)
         <tr>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->department->name}}</td>
             <td>
             <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('users/'.$user->id)}}">show</a>
                    <a class="dropdown-item" href="{{url('users/'.$user->id.'/edit')}}">Edit</a>
                </div>
                </div>

             </td>
         </tr>
         @endforeach
     </tbody>
    </table>
  </div>
</div>

@stop