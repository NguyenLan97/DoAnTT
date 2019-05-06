@extends('backend.master')
@section('title','Danh sách liên hệ')
@section('content')

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h2 class="">DANH SÁCH LIÊN HỆ</h2>
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
                                        <th style="text-align: center;">Tên khách hàng</th>
                                        <th style="text-align: center;">Email</th>
                                        <th style="text-align: center;">Chủ đề</th>
                                        <th style="text-align: center;">Nội dung tin nhắn</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;"></th>                             
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                	@foreach($contactlist as $contact)
                                	<tr>
                                		<td style="text-align: center;">{{$contact->contact_id}}</td>
                                		<td style="text-align: center;">{{$contact->contact_name}}</td>
                                		<td style="text-align: center;">{{$contact->contact_email}}</td>
                                		<td style="text-align: center;">{{$contact->contact_subject}}</td>
                                		<td style="text-align: center;">{{$contact->contact_message}}</td>
                                		<td style="text-align: center;">{{$contact->created_at}}</td>
                                		<td style="text-align: center;">
                                        	<a href="{{asset('admin/contact/delete/'.$contact->contact_id)}}"" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-info" style="background: #f0ad4e; border-color: #f0ad4e;"><i class="fa fa-trash-o"></i></a>
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
