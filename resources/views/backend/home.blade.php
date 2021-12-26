@extends('backend.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-2">
            <div class="card-header">
                 <h4>Services</h4>
                 <a href="{{url('servicescreate')}}" class="btn btn-danger">Add service</a>
            </div>
            <div class="card-body">
                <!-- <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote> -->
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            <tr>
             <td>Service Name</td>
             <td>Service Description</td>
             <td>Service status name</td>
             <td>Service department name</td>
             <td>
            <!-- Example single danger button -->
                <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">show</a>
                    <a class="dropdown-item" href="#">Edit</a>
                </div>
            </div>

             </td>
         </tr>
         
            </tbody>
    </table>
            </div>
        </div>
    </div>
</div>

@stop