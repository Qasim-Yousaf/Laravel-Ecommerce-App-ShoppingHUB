
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 text-left">

        <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Products.." aria-label="Search">
        <button class="btn btn-primary my-sm-0"  type="submit">Search</button>
      </form>
            
          </div>

          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="fas fa-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+1) 234 5678 9101</span></a></span>
              <span><a href="#"><span class="fas fa-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">shoppingHUB@gmail.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>



 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-header " style="font-family:Arial;">
      <div class="container">




  <a class="navbar-brand " href="#">
    <span style="color:white;font-weight:bolder;">
     SHOPPING
   </span>
     <i class="fas fa-shopping-cart"style="color: white;font-size: 20px;"></i>
   <span style="color:Red;font-weight: bolder;">
    HUB 
    </span>
  </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation"> 
  <span class="navbar-toggler-icon"></span> 
</button> 
<div class="collapse navbar-collapse" id="navbarResponsive"> 
  <ul class="navbar-nav ml-auto"> 
    <li class="nav-item active"> 
      <a class="nav-link" href="{{Route('userhome')}}"style="color:white;font-weight:bolder; padding-right: 30px;">
        HOME
        <i class="fa fa-home" style="color: white;"></i> 
        <span class="sr-only">(current)</span>
         </a> 
       </li>



  
   <li class="nav-item dropdown" >
      <a class="dropdown-toggle nav-link " data-toggle="dropdown" >
        <span class="caret" style="color:white;font-weight:bolder; " >PRODUCTS</span></a>
           <ul class="dropdown-menu bg-dark">
               @foreach($Category as $category) 
                <li>
                  <a href="{{route('productcategory',$category->id)}}" id="a"style="color:white;font-weight:bolder;" class="dropdown-item">
                    {{$category->name}}
                  </a>
                </li>
                @endforeach
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"style="color:white;font-weight:bolder;padding-left: 30px;padding-right: 30px;      ">CART <i class="fas fa-shopping-cart"style="color: white;font-size: 15px;"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('about')}}"style="color:white;font-weight:bolder;padding-right: 30px;">ABOUT</a>
            </li>
            <li class="nav-item">
              @if(Auth::guest())
              <a class="nav-link" href="{{Route('login')}}"style="color:white;font-weight:bolder;">LOGIN</a>
              @else
                 <a class="nav-link" href="{{ route('logout') }}" style="color: white;font-weight: bolder;" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                      @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>

