@extends('admin.app')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Product Details</h1>
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
                         <div class="panel-heading">
                       <h1>Add Product Details</h1>
                        </div>
                        </div>
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{Route('ppost')}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" placeholder="product name" name="name" id="product_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Brand</label>
                                            <input class="form-control" placeholder="product name" name="brand" id="product_brand">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <input class="form-control" placeholder="product name" name="quantity" id="product_quantity">
                                        </div>

                                         <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" placeholder="product price" name="price" id="product_price">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Code</label>
                                            <input class="form-control" placeholder="product Code" name="product_code" id="product_code">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Color</label>
                                            <input class="form-control" placeholder="product color" name="color" id="color">
                                        </div>
                                        
                                    <div class="form-group">
                                        <label>Size </label><br>
                                         <select class="form-group" name="size">
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
                                            <textarea class="form-control"placeholder="Enter product Description" rows="3" name="description" id="product_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Input image</label>
                                            <input type="file" name="image" id="product-image">
                                        </div>
                                        
                                        <div>
                                           <input type="checkbox" name="famous" value="1">Famous Product<br>
                                       <input type="checkbox" name="feature" value="1">Feature Product<br>
       
                                        </div>

                                         <div class="form-group"><br>
                                             <button type="submit" class="btn btn-primary">submit</button>
                                             <a class="btn btn-warning" href="{{route('product')}}">Back</a>
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