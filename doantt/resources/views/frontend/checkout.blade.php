@extends('frontend.master')
@section('title','Giỏ hàng')
@section('content')
<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get(
			'{{asset('cart/update')}}',
			{qty:qty,rowId:rowId},
			function(){
				location.reload();
			}
			);
	}
</script>
<base href="{{asset('')}}/">
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{asset('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Giỏ hàng</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Giỏ hàng: </h3>
			@if(Cart::count()>=1)
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Ảnh SP</th>
							<th>Số lượng</th>
							<th>Tên SP</th>
							<th>Đơn giá</th>
							<th>Thành tiền</th>
							<th>Xóa</th>
						</tr>
					</thead>
					@foreach($items as $item)
					<tr class="rem1">
						<td class="invert-image"><a href=""><img src="{{asset('../storage/app/images/'.$item->options->img)}}" alt=" " class="img-responsive" /></a></td>
						<td style="text-align: center;">
							 <div>
							 	<input class="from-control" type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
							 </div>
						</td>
						<td class="invert">{{$item->name}}</td>
						<td class="invert">{{number_format($item->price,0,',','.')}} đ</td>
						<td class="invert">{{number_format($item->price*$item->qty,0,',','.')}} đ</td>
						<td class="invert"><a href="{{asset('cart/delete/'.$item->rowId)}}"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tr>
					@endforeach	
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Tổng tền: <span class="total-price"></span>{{$total}} đ</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4><a href="#">Đặt hàng</a><span class="total-price"></h4>
				</div>
				<div class="clearfix"> </div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4><a href="#">Cập nhật</a><span class="total-price"></h4>
				</div>
				<div class="clearfix"> </div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4><a href="{{asset('cart/delete/all')}}">Xóa giỏ hàng</a><span class="total-price"></h4>
				</div>
				<div class="clearfix"> </div>
			</div>
			@else
			<h4>Giỏ hàng rỗng! </h4>
			@endif
			<div class="clearfix"> </div>
			<div class="col-md-9">
				<h2 style="color:red">XÁC NHẬN MUA HÀNG</h2></br>
				<form method="post">
					<div class="form-group">
						<label for="email">Địa chỉ Email:</label>
						<input required type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="name">Họ và tên:</label>
						<input required type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="phone">Số điện thoại:</label>
						<input required type="number" class="form-control" id="phone" name="phone">
					</div>
					<div class="form-group">
						<label for="add">Địa chỉ:</label>
						<input required type="text" class="form-control" id="add" name="add">
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-default"><span style="color:#0000ff;">Thực hiện đơn hàng</span></button>
					</div>
					{{csrf_field()}}
				</form>
			</div>
			<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{asset('detail/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Trở về trang chi tiết sản phẩm</a>
				</div>
		</div>
	</div>
<!-- //checkout -->
@endsection