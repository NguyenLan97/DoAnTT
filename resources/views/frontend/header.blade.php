<base href="{{asset('')}}/">
<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">nguyenlan220897@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0968954840</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php">Đăng nhập</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Đăng kí</a></li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="{{asset('/')}}">Kitchen Art<span>Houseware</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{asset('/')}}" class="act">TRANG CHỦ</a></li>
							<li><a href="{{asset('about/')}}">GIỚI THIỆU</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">DANH MỤC SẢN PHẨM<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										@foreach($category as $cate)
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate->cate_name}}</a></h6>
											</ul>
										</div>
										@endforeach
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="{{asset('news/')}}">TIN TỨC</a></li>
							<li><a href="{{asset('mail/')}}">lIÊN HỆ</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="{{asset('search/')}}">
								<input class="sb-search-input" placeholder="Nhập từ khóa cẩn tìm ..." type="text" id="search" name="result">
								<input class="sb-search-submit" type="submit">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->

							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="{{asset('cart/show')}}">
							<h3> <div class="total">
								&lpar; <span>{{Cart::count()}}</span> sản phẩm&rpar;</div>
								<img src="frontend/images/bag.png" alt="" />
							</h3>
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
