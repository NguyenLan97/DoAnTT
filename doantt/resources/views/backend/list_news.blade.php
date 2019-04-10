@extends('backend.master')
@section('title','Tin tức')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h2>TIN TỨC</h2>
                </div>
                <div class="col-sm-1" style="padding-left: 3.4%">
                        <h2><a  href="{{asset('admin/news/add')}}" class="btn btn-success"><i class="fa fa-plus"></i></a></h2>
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
                                        <th style="text-align: center;">Tiêu đề</th>
                                        <th style="text-align: center;">Nội dung</th>
                                        <th style="text-align: center;">Hình ảnh</th>
                                        <th style="text-align: center;"></th>
                                        <th style="text-align: center;"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                	<tr>
                                		<td></td>
                                		<td></td>
                                		<td></td>
                                		<td></td>
                                		<td style="text-align: center;">
                                            <a href="{{asset('admin/news/edit/')}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                        </td> 
                                        <td style="text-align: center;">
                                        	<a href="{{asset('admin/news/delete/')}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-info" style="background: #f0ad4e; border-color: #f0ad4e;"><i class="fa fa-trash-o"></i></a>
                                        </td> 
                                	</tr>
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
@endsection
