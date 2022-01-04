@extends('frontend.index')

@section('content')
<div id="hero-div">
  	<img src="{{asset('images/pic 6.jpeg')}}" alt="Snow" style="width:100%;height:700px;">
  		<div id="centered" style="font-size:90px;color:	#e6ffff;">Services</div>
</div>

<div class="container">
          <div class="row mt-5">
            @foreach ($services as $service)
            @include('frontend.partials.service') 
            @endforeach
          </div>

          <div class="row my-5 ">
            <div class="col-md-4"></div>
               <div class="col-md-4">
               {{$services->links()}}

               </div>


@stop