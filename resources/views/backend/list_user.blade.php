@extends('backend.master')
@section('title','Danh sách thành viên')
@section('content')

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h2>DANH SÁCH THÀNH VIÊN</h2>
                </div>
                <div class="col-sm-1" style="padding-left: 3.4%">
                        <h2><a  href="{{asset('admin/user/add')}}" class="btn btn-success"><i class="fa fa-plus"></i></a></h2>
                </div>
                <!-- /.col-lg-12 -->
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
                                        <th style="text-align: center;">ID</th>
                                        <th style="text-align: center;">Email</th>
                                        <th style="text-align: center;">Họ tên</th>
                                        <th style="text-align: center;">Địa chỉ</th>
                                        <th style="text-align: center;">Điện thoại</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Quản trị</th>
                                        <th style="text-align: center;"></th>
                                        <th style="text-align: center;"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                	@foreach($userlist as $user)
                                	<tr>
                                		<td style="text-align: center;">{{$user->id}}</td>
                                		<td style="text-align: center;">{{$user->email}}</td>
                                		<td style="text-align: center;">{{$user->full_name}}</td>
                                		<td style="text-align: center;">{{$user->address}}</td>
                                		<td style="text-align: center;">{{$user->phone}}</td>
                                		<td style="text-align: center;">{{$user->created_at}}</td>
                                		<td style="text-align: center;">@if($user->is_admin == 1) Có @else Không @endif</td>
                                		<td style="text-align: center;">
                                            <a href="{{asset('admin/user/edit/')}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                        </td> 
                                        <td style="text-align: center;">
                                        	<a href="{{asset('admin/user/delete/'.$user->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-info" style="background: #f0ad4e; border-color: #f0ad4e;"><i class="fa fa-trash-o"></i></a>
                                        </td> 
                                	</tr>
                                	@endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
 @endsection
