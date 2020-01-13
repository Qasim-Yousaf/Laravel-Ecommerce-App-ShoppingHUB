@extends('admin.app')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User Details</h1>
                    </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                    <a class="btn btn-success" href="{{route('AddAdminuser')}}">Add User</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>User Name</th>
                                        <th>E-mail</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                     </thead>
                                 <tbody>

                                    @foreach($Admins as $admin )
                                    <tr>
                                    <td>{{ $loop->index+1}}</td>
                                    <td>{{ $admin->name}}</td>
                                    <td>{{ $admin->email}}</td>
                                    <td><a class="btn btn-info">Edit</a></td>
                                    <td>
                        <form action="admin-user/{{$admin->id}}" method="POST">
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

@endsection