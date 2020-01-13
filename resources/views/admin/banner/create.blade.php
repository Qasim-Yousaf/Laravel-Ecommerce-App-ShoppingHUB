@extends('admin.app')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Banner Create</h1>
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
                                    <form role="form" action="{{route('postbanner')}}" method="POST" enctype="multipart/form-data">

                                        {{csrf_field()}}
                                        
                                        <div class="form-group">
                                            <label for="subtitle">Banner Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Banner name ,Company">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle">Banner Subtitle</label>
                                            <input type="text" class="form-control" name="subtitle" placeholder="size , color , operating system">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="image">Input image</label>
                                            <input type="file" name="image" id="banner-image">
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <button type="submit" class="btn btn-primary">submit</button>
                                             <a class="btn btn-warning" href="{{route('banner')}}">Back</a>
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