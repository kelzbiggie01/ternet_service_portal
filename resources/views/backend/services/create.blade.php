@extends('backend.index')
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
            <h2>Add Service</h2>
            
        </div>
         <div class="card-body">
         <form class="row g-3" method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
           @csrf
  <div class="col-md-12">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  
  <div class="form-group col-md-6">
      <label for="inputState">Status</label>
      <select id="inputState" name="status_id" class="form-control">
      <option selected disabled>Select Status</option>
      @foreach($statuses as $status)
      <option value="{{$status->id}}">{{$status->name}}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="inputState">Department</label>
    <select id="inputState"  name="department_id" class="form-control">
      <option selected disabled>Select Department</option>
      @foreach($departments as $department)
      <option value="{{$department->id}}">{{$department->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-12">
    <div class="mb-3">
    <label for="formFile" class="form-label">Service image</label>
    <input class="form-control" name="image" type="file" id="formFile">
    </div>
  </div>

  <div class="col-12">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" placeholder="write service description" rows="3"></textarea>
  </div>
  </div>

  <div class="col-12">
  <a href="{{url('backendservices')}}" class="btn btn-danger m-3">Cancel</a>
  <button class="btn btn-primary m-3" type="submit">Save</button>
  </div>
</form>
</div>

</div>

@stop