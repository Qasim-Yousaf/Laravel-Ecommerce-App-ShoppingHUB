@extends('admin.app')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Show</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-success" href="{{route('product_create')}}">Add Product</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Quantity</th>
                                        <th>color</th>

                                        
                                        <th>size</th>
                                        <th>product_code</th>
                                        <th> <span class="glyphicon glyphicon-edit"></span>  Edit</th>
                                        <th><span class="glyphicon glyphicon-trash"></span>  Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Product as $product)

                                    
                                      <tr class="odd gradeX">
                                        <td>{{ $loop->index +1}}</td>
                                         <td>{{$product->name}}</td>
                                         <td>{{$product->brand}}</td>
                                         <td>{{$product->quantity}}</td>
                                         <td>{{$product->color}}</td>
                                         <td>{{$product->size}}</td>
                                         <td>{{$product->product_code}}</td>
                                      <td class="center"><a class="btn btn-primary" href="product/{{$product->id}}">Edit</a></td>
                                        <td class="center">
                                            <form action="product/{{$product->id}}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('Delete')}}

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--end row  -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection