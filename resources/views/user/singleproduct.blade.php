

@extends('user.app')


@section('content')

<div class="container" style="margin-top: 50px;">
 <div class="row">

@foreach($Products as $pro)


<div class="bg-white py-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
              <img src="{{asset('img/'.$pro->image)}}" alt="Image" class="img-fluid">

            </div>
           
            <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
              <h3 class="text-black mb-4 font-weight-bold">About {{$pro->name}}</h3>
              <p class="mb-4">{{$pro->description}}
               

              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Brand:</h3>
                <div class="price">{{$pro->brand}}</div>
              </div>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> ${{$pro->price}}</div>
              </div>


              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Stock:</h3>
                <div class="price">Avalible {{$pro->quantity}} picecs</div>
              </div>
              <p>
                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
              </p>
            </div>

          </div>

  </div>

@endforeach


</div>
</div>


@endsection


