<div class="site-blocks-cover overlay" style="background-image: url(selling/selling/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-7">
                <h1>Shop With Us</h1>
                <p class="mb-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#products-section" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>
                  <a href="#" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">Club Membership</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  


     <div class="site-section" id="products-section">
      <div class="container">
        
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Popular Products</h3>
            <h2 class="section-title mb-3">Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="row">
        @foreach($Products as $product)  

          <div class="col-lg-4 col-md-6 mb-5" >
            <div class="product-item">
              <figure>
                <img src="{{asset('img/'.$product->image)}}" style="width: 300px;height: 300px;"alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="{{route('singleproduct',$product->id ) }}">{{$product->name}}</a></h3>
                
                <p class="mb-4"><del class="mr-2">$269.00</del>Rs {{$product->price}}</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="{{route('singleproduct',$product->id ) }}" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Awesome Products</h3>
            <h2 class="section-title mb-3">Featured Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        @foreach($features as $feature)
        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="{{asset('img/'.$feature->image)}}" alt="Image" class="img-fluid">
            </div>
           
            <div class="col-md-5 ml-auto product-title-wrap">
              <span class="number">{{$loop->index+1}}</span>
              <h3 class="text-black mb-4 font-weight-bold">About This {{$feature->name}}</h3>
              <p class="mb-4">{{$feature->description}}</p>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> ${{$feature->price}}</div>
              </div>
              <p>
                <a href="{{route('singleproduct',$feature->id ) }}" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
              </p>
            </div>
          </div>
        </div>
        @endforeach
     

      </div>
    </div>


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="{{asset('selling/selling/images/about_1.jpg')}}" class="img-fluid" alt="Image')}}">
            <div class="experience">
              <span class="year">Trusted Merchant</span>
              <span class="caption">for 50 years</span>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title">Merchant Company</h3>
            <h2 class="section-title mb-3">About Us</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
            <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>

       <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

           

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form" >


    <form role="form" action="{{ route('massage')}}" method="POST" enctype="multipart/form-data"> 

      {{csrf_field()}}
                                 
              
              
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name" data-rule="minlen:4"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" required placeholder="Your Email" data-rule="email"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" required placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="massage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
