@extends('frontend.master')
@section('title','home')
@section('content')

<base href="{{asset('')}}/">
<div class="banner">
	<div class="container">
		<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
			<div class="wmuSlider example1">

			</div>
				<script src="frontend/js/jquery.wmuSlider.js"></script>
				<script>
					$('.example1').wmuSlider();
				</script>
		</div>
	</div>
</div>

<!-- //banner -->
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!-- collections -->
<div class="new-collections">
	<div class="container">
		<h3 class="animated wow zoomIn" data-wow-delay=".5s">SẢN PHẨM NỔI BẬT</h3>
		<div class="new-collections-grids">
			<div class="product-list row">
				@foreach($featured as $item)
				<div class=" col-md-4 new-collections-grid new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="new-collections-grid1-image">
						<a class="product-image"><img src="{{asset('images/'.$item->prod_img)}}" alt=" " class="img-responsive" /></a>
						<div class="new-collections-grid1-image-pos">
							<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
						</div>
					</div>
					<h4><a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">{{$item->prod_name}}</a></h4>
					<div class="new-collections-grid1-left simpleCart_shelfItem">
						<p><i>{{number_format($item->prod_price,0,',','.')}}</i> <span class="item_price">{{number_format($item->prod_price_promotion,0,',','.')}}</span><a class="item_add" href="{{asset('cart/add/'.$item->prod_id)}}">Đặt hàng </a></p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
<div>

	</div>
		<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="frontend/images/bnoi1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>SẢN PHẨM<span>MỚI</span></h3>
								<div>
									<p>Thiết kế sang trọng</p>
									<p>Màu sắc trang nhã</p>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="frontend/images/mxst4.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p style="color:black">SALE 50%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="frontend/images/bnoi2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<b><p style="color:black">SẢN PHẨM <span>BÁN CHẠY NHẤT</span></p></b>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="container">
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="frontend/images/noidoi1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>SALE 20%</h3>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="frontend/images/noidoi2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p style="color:black">SALE 30%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="frontend/images/noidoi3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<b><p style="color:black">SALE 40%</p></b>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
@endsection
