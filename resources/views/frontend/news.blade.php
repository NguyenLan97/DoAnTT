@extends('frontend.master')
@section('title','Tin tức')
@section('content')
<!-- breadcrumbs -->
<base href="{{asset('')}}/">
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{asset('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Tin tức</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Tin tức về sản phẩm</h3>
		</div>
	</div>
	@foreach($news as $item)
	<section class="latest-post-area pb-120">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-8 post-list">
						<!-- Start latest-post Area -->
						<div class="latest-post-wrap">
							<div class="single-latest-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="{{asset('images/'.$item->news_image)}}" alt="">
									</div>
								</div>
								<div class="col-lg-7 post-right">
									<a style="color:blue">
										<h4>{{$item->news_title}}</h4>
									</a>
									<p class="excert">
										{{$item->news_content}}
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach
<!-- //mail -->
@endsection	