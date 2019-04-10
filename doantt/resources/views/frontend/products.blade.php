@extends('frontend.master')
@section('title','Các sản phẩm')
@section('content')

<base href="{{asset('')}}/">
<!-- header -->
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{asset('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">	
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">					
					<h3></h3>
					<ul class="dropdown-menu1">
							<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0" />
							</a></li>	
					</ul>
				</div>
				<div class="new-products animated wow slideInUp" data-wow-delay=".5s">
					<h3>Sản phẩm mới</h3>
					@foreach($new as $item)
					<div class="new-products-grids">
						<div class="new-products-grid">
							<div class="new-products-grid-left">
								<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}"><img src="{{asset('../storage/app/images/'.$item->prod_img)}}" alt=" " class="img-responsive" /></a>
							</div>
							<div class="new-products-grid-right">
								<h4><a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">{{$item->prod_name}}</a></h4>
								<div class="simpleCart_shelfItem new-products-grid-right-add-cart">
									<p> <span class="item_price">{{number_format($item->prod_price_promotion,0,',','.')}}
									</span><a class="item_add" href="{{asset('cart/add/'.$item->prod_id)}}">Đặt hàng </a></p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grids-bottom">
					@foreach($items as $item)
					<div class="col-md-4 products-right-grids-bottom-grid">
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="single.php" class="product-image"><img src="{{asset('../storage/app/images/'.$item->prod_img)}}" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
								</div>
							</div>
							<h4><a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">{{$item->prod_name}}</a></h4>
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p><i>{{number_format($item->prod_price,0,',','.')}}</i> <span class="item_price">{{number_format($item->prod_price_promotion,0,',','.')}}</span><a class="item_add" href="{{asset('cart/add/'.$item->prod_id)}}">Đặt hàng </a></p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
					@endforeach
				</div>
				<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
				  <ul class="pagination paging">
					<li>
					  <a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					  </a>
					</li>
					<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
					  <a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
@endsection