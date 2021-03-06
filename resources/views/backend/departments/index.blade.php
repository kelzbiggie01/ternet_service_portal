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
            <h2>Departments</h2>
            <a href="{{url('departments/create')}}" class="btn btn-primary float-right">Add Department</a>
        </div>
         <div class="card-body">
    <table class="table table-bordered">
     <thead>
         <tr>
             <th>Name</th>
             <th>Date</th>
             <th>Action</th>
         </tr>
     </thead>

     <tbody>
         @foreach ($departments as $department)
         <tr>
             <td>{{$department->name}}</td>
             <td>{{$department->created_at}}</td>
             <td>
            <!-- Example single danger button -->
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('departments',$department->id)}}">show</a>
                <a class="dropdown-item" href="{{url('departments/'.$department->id.'/edit')}}">Edit</a>
              </div>
            </div>


             </td>
         </tr>
         @endforeach
     </tbody>
    </table>
  </div>
</div>

</div>
@stop