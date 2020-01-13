@extends('admin.app')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category Create</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Category Details
                        </div>
                            @if(count($errors)> 0)
                            @foreach ($errors ->all() as $error)
                           <p class="alert alert-danger">{{ $error}}</p>
                            @endforeach
                                @endif
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{route('categoryshow')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Category Name</label>
                                               <input class="form-control" placeholder="category name" name="name" id="category-name">
                                        </div> 
                                         <div class="form-group">
                                           <button type="submit" class="btn btn-primary">submit</button>
                                              <a class="btn btn-warning" href="{{route('category')}}">Back</a>
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