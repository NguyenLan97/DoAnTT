@extends('backend.master')
@section('title','Danh sách đơn hàng')
@section('content')

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h2 class="">DANH SÁCH ĐƠN HÀNG</h2>
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
                                
                                        <th style="text-align: center;">Địa chỉ</th>
                                        <th style="text-align: center;">Số điện thoại</th>
                                        <th style="text-align: center;">Tổng tiền</th>
                                        <th style="text-align: center;">Ngày tạo</th>
                                        <th style="text-align: center;">Chi tiết</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th style="text-align: center;"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                	@foreach($billlist as $bill)
                                	<tr>
                                		<td style="text-align: center;">{{$bill->bill_id}}</td>
                                		<td style="text-align: center;">{{$bill->bill_fullname}}</td>
                                		<td style="text-align: center;">{{$bill->bill_address}}</td>
                                		<td style="text-align: center;">{{$bill->bill_phone}}</td>
                                		<td style="text-align: center;">{{$bill->bill_price}}</td>
                                		<td style="text-align: center;">{{$bill->created_at}}</td>
                                		<td style="text-align: center;">
                                			<input id="btnSubmit"  type="submit" class="btn btn-lg btn-success btn-block" value="Chi tiết" style=" width: 82px; height: 42px;padding-left: 10px;">
                                		</td>
                                		<td style="text-align: center;">
			                                <select required name="prod_cate" class="form-control" id="sel1" onclick="checkRole('chk', this)">
			                                    <option value="">Đã tiếp nhận</option>
			                        			<option value="">Đang xử lý</option>
			                        			<option value="">Đã xử lý</option>
			                        			<option value="">Đã thanh toán</option>
			                        			<option value="">Hủy</option>
			                                </select>
			                                <input id="btnSubmit"  type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
                                		</td>
                                		<td style="text-align: center;"></td>
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
