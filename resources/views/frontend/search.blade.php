@extends('frontend.master')
@section('title','home')
@section('content')

<base href="{{asset('')}}/">


<!-- //banner -->
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!-- collections -->
<div class="new-collections">
	<div class="container">
		<h2 class="animated wow zoomIn" data-wow-delay=".5s">Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h2>
		<div class="new-collections-grids">
			<div class="product-list row">
				@foreach($items as $item)
				<div class=" col-md-4 new-collections-grid new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="new-collections-grid1-image">
						<a href="" class="product-image"><img src="{{asset('images/'.$item->prod_img)}}" alt=" " class="img-responsive" /></a>
						<div class="new-collections-grid1-image-pos">
							<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
						</div>
					</div>
					<h4><a href="">{{$item->prod_name}}</a></h4>
					<div class="new-collections-grid1-left simpleCart_shelfItem">
						<p><i>{{number_format($item->prod_price,0,',','.')}}</i> <span class="item_price">{{number_format($item->prod_price_promotion,0,',','.')}}</span><a class="item_add" href="">Đặt hàng </a></p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
<div>
</div>
@endsection
