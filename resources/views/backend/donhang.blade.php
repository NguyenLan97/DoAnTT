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
                                        <th style="text-align: center;"></th>
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
                                		<td style="text-align: center;">{{number_format($bill->bill_price,0,',','.')}}</td>
                                		<td style="text-align: center;">{{$bill->created_at}}</td>
                                		<td style="text-align: center;">
                                			 <!-- <input id="btnSubmit"  type="submit" class="btn btn-lg btn-success btn-block" value="Chi tiết" style=" width: 82px; height: 42px;padding-left: 10px;" data-target="#myModal<?=$bill->bill_id?>">-->
                                			<a href="" class="btn btn-info" data-toggle="modal" data-target="#myModal<?=$bill->bill_id?>" >Chi tiết </a>
                                			<div class="modal fade" id="myModal<?=$bill->bill_id?>" role="dialog">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Chi tiết đơn hàng</h4>
                                                </div>
                                                <div class="modal-body">
                                                 <table class="table table-bordered">
                                                    <thead>
                                                       
                                                      <tr>
                                                        <!-- <th>STT</th> -->
                                                        <!-- <th>Hình ảnh</th> -->
                                                        <th>Tên SP</th>
                                                        <th>Số lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Thành tiền</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($detail_list as $detail)
                                                    @if($detail->bill_id==$bill->bill_id )

                                                      <tr>
                                                         <!-- <td>{{$detail->id}}</td> -->
                                                        <!-- <td><img style="..." src="{{isset($detail->product->pro_avatar)}}"></td> -->
                                                        <td>{{$detail->prod_name}}</td>
                                                        <td>{{$detail->prod_quantity}}</td>
                                                        <td>{{number_format($detail->prod_price,0,',','.')}}</td>
                                                        <td>{{number_format($detail->prod_price*$detail->prod_quantity,0,',','.')}}</td>
                                                   
                                                      </tr>
                                                      @endif
                                                     @endforeach
                                                   
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                </div>
                                              </div>
                                              
                                            </div>
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
                                		<td style="text-align: center;">
                                			<input type="submit" value="IN HÓA ĐƠN" style="background:red">
                                		</td>
                                		<td style="text-align: center;">
                                        	<a href="{{asset('admin/bill/delete/'.$bill->bill_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-info" style="background: #f0ad4e; border-color: #f0ad4e;"><i class="fa fa-trash-o"></i></a>
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
