@extends('user.app')
  @section('content')



    <!-- Slider Start  -->
  
    <div class="container ">

      <div class="row">

        <div class="col-lg-12" style="margin-top: 8px;">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
  @foreach($Banner as   $ban)            
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index+1}}" class="active"></li>
@endforeach                 
            </ol>
            <!-- <span>MacBook Air</span> -->
            
            <div class="carousel-inner" >
  @foreach($Banner as $key => $ban) 
              <div class="carousel-item @if($key==0)active @endif" >
                         
           <img  style="height: 590px; width: 100%;padding-top: 25px;" src="{{asset('img/'.$ban->image)}}"  alt="First slide">
               
              </div>
@endforeach 
               
            </div>
           
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
                </div>
          </div>

          <!-- Slider End  -->
 

<!-- Main content -->


<!-- Cetgory  start -->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Categorys</h3>
          <p class="section-description">These are the following Category that should i provide by the admin side thanks </p>
        </div>
      
<div class = "row">
@foreach($Category as $cat)
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <a href="{{route('productcategory',$cat->id)}}">
              <img src="{{asset('img/1555446907.jpg')}} "   alt="">
              <div class="details ">
                <h4>{{$cat->name}}</h4>
                <span>category subtitle</span>
              </div>
              </a>
            </div>
@endforeach
          </div>
      </div>
      
    </section>
<!--  End Category -->

<!--  Discounted  start-->
<!--   <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Category Items</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
@foreach($Category as $cat)          
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
                          <h4 class="title" style="padding-top: 5px;"><a href="">{{$cat->name}}</a></h4>
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                   <img class="card-img-top" src="{{asset('img/1555446907.jpg')}}" alt="">
     
            </div>
          </div>
@endforeach
      </div>
    </section>

  --><!-- Discounted End 
 

    <! New Arrrival start -->
  <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">New Arrival Items</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
@foreach($Product as $pro)          
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                   <img class="card-img-top" src="{{asset('img/1555446907.jpg')}}" alt="">
                 <h4 class="title" style="padding-top: 5px;"><a href="">{{$pro->name}}</a></h4>
            </div>
          </div>
@endforeach
      </div>
    </section>

<!-- New Arrival End  --><!-- 
  <div class="container">
          <div class="row">
@foreach($Category as $cat)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <a href="{{route('productcategory',$cat->id)}}"><img class="card-img-top" src="{{asset('img/1555446907.jpg')}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$cat->name}}</a>
                  </h4>
                  <h5></h5>
                  <p class="card-text">dmfldmfldfmdl;mfdmfmd</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
@endforeach
          </div>
		  </div>
 -->
      <!-- call-to-action image start -->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{route('about')}}">Call To Action</a>
          </div>
        </div>

      </div>
    </section>
    <!-- #call-to-action -->
          
@endsection
        