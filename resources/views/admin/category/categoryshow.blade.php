@extends('admin.app')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category Show</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-success" href="
                            {{ url(route('category_create')) }}">Add Category</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Name</th>
                                        <th> <span class="glyphicon glyphicon-edit"></span>  Edit</th>
                                        <th><span class="glyphicon glyphicon-trash"></span>  Delete</th>
                                    </tr>
                                     </thead>
                                 <tbody>
                                @foreach($Category as $category)
              
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->index +1}}</td>
                                         <td>{{$category->name}}</td>
                                      <td class="center"><a class="btn btn-primary" href="category/{{$category->id}}">Edit</a></td>
            <td class="center">
			<form action="category/{{$category->id}}" method="POST">
                                      {{csrf_field()}}
                                    {{method_field('DELETE')}}
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


<!--  -->