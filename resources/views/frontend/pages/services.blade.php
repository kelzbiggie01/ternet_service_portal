@extends('frontend.index')

@section('content')
<div id="hero-div">
  	<img src="{{asset('images/pic 6.jpeg')}}" alt="Snow" style="width:100%;height:700px;">
  		<div id="centered" style="font-size:90px;color:	#e6ffff;">Services</div>
</div>

<div class="container">
          <div class="row mt-5">
            
            @include('frontend.partials.service') 
            
          </div>

          <div class="row my-5 ">
            <div class="col-md-4"></div>
               <div class="col-md-4">
               <nav aria-label="Page navigation example">
                 <ul class="pagination">
                   <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item"><a class="page-link" href="#">...</a></li>
                   <li class="page-item"><a class="page-link" href="#">10</a></li>
                   <li class="page-item"><a class="page-link" href="#">Next</a></li>
                 </ul>
               </nav>

               </div>


@stop