@extends('user.app')
<!-- Main Content -->


@section('content')
<div class="container" style="margin-top: 100px;">
 <div class="row">
@foreach($Products as $product)
@foreach($product->products as $product)
        
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
@endforeach
           

          </div>

        </div>


  @endsection

