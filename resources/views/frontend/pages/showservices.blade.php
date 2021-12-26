@extends('frontend.index')
@section('content')

     <div id="hero-div">
  		<img src="{{asset('images/pic 3.jpg')}}" height="10%" alt="Snow" style="width:100%;">
  		<div id="centered">Service Name</div>
	</div>
</div>
<div class="container">
<div class="row mt-5">
        <div class="col-md-6">
          <h2><a href="{{url('showdepartment')}}">Department Name</a></h2>
        </div>
        <div class="col-md-6 float-right">
          <h2 class="float-right">Status name</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          All the description associating with the department and service<br>
          TERNET provides bandwidth to all members. In order to get bandwidth
 from TERNET you will have to connect to TERNET NOC at COSTECH
Building using your preferred last-mile provider or TERNET partner
provider.
The benefit of using TERNET partner provider is that the service is already
 negotiated for you and you pay only one invoice to TERNET.
If you use your other preferred provider, you will only pay
 TERNET for bandwidth and pay the link costs to your provider.
Why TERNET Bandwidth Service
TERNET bandwidth is from Africaconnect2 project managed by
Ubuntunet Alliance specifically for research and education purposes.
 Being one of TERNET members and connected to TERNET network,
 you benefit from regional collaborations in education and research.
Africanconnect2 project link is not connected to local broadband providers;
 it terminates at Seacom PoP and goes to GEANT network in
Europe where most research and education links meet.
way) which means less latency/delay to you.

        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <h2>RELATED SERVICES</h2>
        </div>
      </div>

      
            <div class="row mt-5">
            
            <div class="col-md-4 mt-3">
              <div class="card h-100">
               <img src="" alt="" height="250" width="350">
                <div class="card-body m-2">
                <h4 class="card-title">
                 <a href="" class="text-muted"><b>Name service</b></a></h4>
                  <h5 class="card-text text-muted"><b>Word goes here </b></h5>
               </div>
            </div>

            
          </div>

          <div class="col-md-4 mt-3">
              <div class="card h-100">
               <img src="" alt="" height="250" width="350">
                <div class="card-body m-2">
                <h4 class="card-title">
                 <a href="" class="text-muted"><b>Name service</b></a></h4>
                  <h5 class="card-text text-muted"><b>Word goes here </b></h5>
               </div>
            </div>

            
          </div>

          <div class="col-md-4 mt-3">
              <div class="card h-100">
               <img src="" alt="" height="250" width="350">
                <div class="card-body m-2">
                <h4 class="card-title">
                 <a href="" class="text-muted"><b>Name service</b></a></h4>
                  <h5 class="card-text text-muted"><b>Word goes here </b></h5>
               </div>
            </div>

            
          </div>
              
                 
            </div> 
            
@stop