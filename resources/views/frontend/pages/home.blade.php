@extends('frontend.index')

@section('content')
          <!--  SLIDE SHOWS -->
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/pic 6.jpg')}}" class="d-block w-100" alt="..." style="height:600px;">
                <div class="carousel-caption d-none d-md-block list-style-type"none>
                    <a href=""><h1 class="text-white display-4 mt-120"><b>Fibre Optical</b></h1></a> 
                  </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/pic 8.png')}}" class="d-block w-100" alt="..." style="height:600px;">
                <div class="carousel-caption d-none d-md-block list-style-type"none>
                    <a href=""><h1 class="text-white display-4 mt-120"><b>Software Development</b></h1></a> 
                  </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/pic 9.jpg')}}" class="d-block w-100" alt="..." style="height:600px;">
                <div class="carousel-caption d-none d-md-block list-style-type"none>
                    <a href="software department.html"><h1 class="text-white display-4 mt-120"><b>Quality Control</b></h1></a> 
                  </div>
              </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>
      </div>

      

     <!-- CLOSE SLIDE SHOW -->
      <h2 class="text-center mt-5">SERVICES</h2>
        <h2 class="text-center text-muted">Below are our services</h2>

        <div class="container">
            <div class="row mt-5">
                
            </div>

            <!-- SUBSCRIBE -->
            <div class="row"> 
              <div class="col-md-12"> 
                  <div class="jumbotron text-center mt-5 text-white" style="background-image: url('images/pic 12.jpg');background-repeat: no-repeat;background-size: 100% 100%;">
                      <h1 class="display-3">SUBSCRIBE TO NEWSLETTER</h1>            
                              <div class="row">
                                <div class="col-md-4"></div>
                              <div class="col-md-4">
                                <form action="{{url('storenewsletteremail')}}" method="POST">
                                @csrf
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="email 1" class="form-control form-control-lg" placeholder="Email" name="email" required>
                                  </div>
                                  <div class="col-md-4">
                                    <button type="submit" style="font-size: 13px;" class="btn btn-danger float-left">JOIN</button>
                                  </div>
                                  </form>
                                </div>                        
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                      </div>
                  </div>
              </div>
            <!--END  SUBSCRIBE -->
            @stop