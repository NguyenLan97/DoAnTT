<?php
session_start();
include('controller/C_Customer.php');
$c_customer = new C_Customer();
if(isset($_POST['dangnhap'])){
	$email=$_POST['$email'];
	$password=$_POST['$password'];
	$customer = $c_customer->dangnhapTK($email,md5($password));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dang Nhap</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="public/view/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/view/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="public/view/js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="public/view/js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="public/view/css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="public/view/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="public/view/css/animate.min.css" rel="stylesheet"> 
<script src="public/view/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
	<?php 
        include_once('templates/header.php');
    ?>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Đăng nhập</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<?php
			if(isset($_SESSION['customer_error'])){
				echo "<div class='alert alert-danger'>".($_SESSION['customer_error'])."</div>"
			?>
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng nhập</h3>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="POST" action="#">
					<input type="email" placeholder="Email" name="email" required=" " >
					<input type="password" placeholder="Mật khẩu" name="password" required=" " >
					<div class="forgot">
						<a href="#">Quên mật khẩu?</a>
					</div>
					<input type="submit" name="dangnhap" value="Đăng nhập">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s">Nếu bạn chưa có tài khoản</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="register.php">Đăng ký ngay</a> (Hoặc) Trở về <a href="index.php">Trang chủ<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">Kitchen Art<span>Houseware</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>Copyright(@) NguyenThiLan_KTPM5_K10</p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>