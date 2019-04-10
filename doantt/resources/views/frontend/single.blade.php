@extends('frontend.master')
@section('title','Chi tiết sản phẩm')
@section('content')

<base href="{{asset('')}}/">
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{asset('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Chi tiết sản phẩm</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-12 single-left">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
								<div class="thumb-image"> <img src="{{asset('../storage/app/images/'.$item->prod_img)}}" data-imagezoom="true" class="img-responsive"> </div>
							
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="../public/frontend/js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="../public/frontend/css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3>{{$item->prod_name}}</h3>
					<h4><p><i>{{number_format($item->prod_price,0,',','.')}} VNĐ</i> --> <span class="item_price">{{number_format($item->prod_price_promotion,0,',','.')}} VNĐ</span><a class="item_add"></a></p>
					</h4>
					<div class="description">
						<h5>Mô tả</h5>
							<p>
								<span style="font-size:14px;">
									<strong>Chất liệu nòng cốt</strong>: {{$item->prod_material}} 
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Dung tích</strong>: {{$item->prod_capacity}}
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Hãng sản xuất</strong>: {{$item->prod_producer}}
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Kiểu nắp</strong>: {{$item->prod_cap_type}}
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Kiểu nồi</strong>: {{$item->prod_pot_type}}
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Bảo hành</strong>: {{$item->prod_warranty}}
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Trạng thái</strong>: @if($item->prod_status == 1) Còn hàng @else Hết hàng @endif
								</span>
							</p>
						</div>
					<div class="occasion-cart">
						<a class="item_add" href="{{asset('cart/add/'.$item->prod_id)}}">Đặt hàng</a>
					</div>
					<div class="clearfix"> </div>
					<div class="clearfix"> 
						<p>
							<span style="font-size:14px;" >
								<strong><h4>Mô tả:</h4></strong> {!!$item->prod_description!!}
							</span>
						</p>
					</div>
				</div>
				
			</div>
			
			
		</div>
	</div>
<!-- //single -->
<!-- single-related-products -->
<!-- //single-related-products -->

<!-- zooming-effect -->
	<script src="public/view/js/imagezoom.js"></script>
<!-- //zooming-effect -->
@endsection