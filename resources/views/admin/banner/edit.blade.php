@extends('admin.app')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Banner Edit</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Banner Details
                        </div>
                            
                            @if(count($errors)> 0)
                            @foreach ($errors ->all() as $error)
                            <p class="alert alert-danger">{{ $error}}</p>
                            @endforeach
                                @endif  
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    

                                    <form role="form" action="{{route('editbanner',$Banner->id)}}" method="POST" enctype="multipart/form-data">

                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label for="image">Input image</label>
                                            <input type="file" name="image" id="banner-image" value=" {{$Banner->id}} ">
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <button type="submit" class="btn btn-primary">submit</button>
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
