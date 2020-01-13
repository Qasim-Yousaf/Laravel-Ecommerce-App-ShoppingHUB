@extends('admin.app')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User Massage</h1>
                    </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>User Name</th>
                                        <th>E-mail</th>
                                        <th>Subject</th>
                                        <th>Massage</th>
                                    </tr>
                                     </thead>
                                 <tbody>
                                    @foreach($Massage as $massage)
                                     <tr class="odd gradeX">
                                        <td>{{ $loop->index +1}}</td>
                                        <td>{{$massage->name}}</td>
                                        <td class="center">{{$massage->email}}</td>
                                        <td>{{$massage->subject}}</td>
                                        <td>{{$massage->massage}}</td>
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