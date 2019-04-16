<!DOCTYPE html>
<html>
<head>
<title>Dang Ky</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ url('js/simpleCart.min.js') }}"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui.css') }}">
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ url('js/bootstrap-3.1.1.min.js') }}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="{{ url('css/animate.min.css') }}" rel="stylesheet">
<script src="{{ url('js/wow.min.js') }}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{ url('') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Đăng ký</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng ký ngay</h3>
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">Thông tin cá nhân</h5>
				<form method="POST" action="{{ route('customerRegister') }}">
				<div class="animated wow slideInUp" data-wow-delay=".5s">
					{{ csrf_field() }}
					<input type="text" placeholder="Họ và tên..." name="fullname" required="" >
					@if ($errors->has('fullname'))
						<p class="text-danger mx-3 mt-1">{{ $errors->first('fullname') }}</p>
					@endif

					<input type="email" placeholder="Email" name="email" required=" " >
					@if ($errors->has('email'))
						<p class="text-danger mx-3 mt-1">{{ $errors->first('email') }}</p>
					@endif

					<input type="password" placeholder="Mật khẩu" name="password" required=" " >
					@if ($errors->has('password'))
						<p class="text-danger mx-3 mt-1">{{ $errors->first('password') }}</p>
					@endif

					<input type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation" required=" " >

					<input type="submit" name="dangky" value="Đăng ký">
				</div>
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="{{ url('') }}">Trang chủ</a>
			</div>
		</div>
	</div>
<!-- //register -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="{{ url('') }}">Kitchen Art<span>Houseware</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>Copyright(@) NguyenThiLan_KTPM5_K10</p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>