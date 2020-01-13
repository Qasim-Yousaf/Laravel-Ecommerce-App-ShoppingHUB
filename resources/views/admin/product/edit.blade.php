@extends('admin.app')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Edit</h1>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>
                  @if(count($errors)> 0)
                               @foreach ($errors ->all() as $error)
                           <p class="alert alert-danger">{{ $error}}</p>
                               @endforeach
                                @endif
                <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Product Details
                        </div>
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{route('editproduct',$Product->id)}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" placeholder="product name" name="name" id="product_name"
                                            value="{{$Product->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Brand</label>
                                            <input class="form-control" placeholder="product name" name="brand" id="product_brand"
                                            value="{{$Product->brand}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input class="form-control" placeholder="product name" name="quantity" id="product_quantity" value="{{$Product->quantity}}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" placeholder="product name" name="price" id="product_price"
                                            value="{{$Product->price}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Color</label>
                                            <input class="form-control" placeholder="product name" name="color" id="color"
                                            value="{{$Product->color}}">
                                        </div>


                                        <div class="form-group">
                                            <label>Product Code</label>
                                            <input class="form-control" placeholder="product name" name="product_code" id="product_scode"
                                            value="{{$Product->product_code}}">
                                        </div>

                                        
                                     <div class="form-group">
                                        <label>Size </label><br>
                                         <select class="form-group" name="size" value="{{$Product->size}}">
                                            <option  value="small">Small</option>
                                            <option  value="medium">Medium</option>
                                            <option  value="large">Large</option>
                                            </select> 
                                        </div>
                                        
                                     
                                    <div class="form-group">
                                     <label>Product Category</label>
                                        <select class="form-control" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categorys[]">
                                         @foreach($Category as $category)
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                  
                                        </select>
                                     </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea  class="form-control"placeholder="Enter product Description" rows="3" name="description" id="product_description">{{$Product->description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Input image</label>
                                            <input type="file" name="image" id="product-image" value="{{$Product->image}}">
                                        </div>
                                         
                                        <div>
                                           <input type="checkbox" name="famous" value="{{$Product->famous}}">Famous Product<br>
                                           <input type="checkbox" name="feature" value="1">Feature Product<br>
                                        </div>

                                         <div class="form-group">
                                             <button type="submit" class="btn btn-primary">submit</button>
                                        </div>
                                        </div>
                      
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
            <!--end row  -->
        </div>
            <!-- /.container-fluid -->
        </div>
@endsection