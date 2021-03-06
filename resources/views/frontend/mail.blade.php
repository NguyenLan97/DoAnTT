@extends('frontend.master')
@section('title','Liên hệ')
@section('content')
<!-- breadcrumbs -->
<base href="{{asset('')}}/">
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Liên hệ</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3>Liên hệ với chúng tôi</h3>
			<div class="mail-grids">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form method="post" action="">
						<input type="text" name="contact_name" value="" placeholder="Nhập tên...">
						<input type="email" name="contact_email" value="" placeholder="Nhập email...">
						<input type="text" name="contact_subject" value="" placeholder="Nhập chủ đề...">
						<textarea type="text" name="contact_message" placeholder="Nhập tin nhắn..." ></textarea>
						<input type="submit" value="Gửi" >
						{{csrf_field()}}
					</form>
					
				</div>
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="mail-grid-right1">
						<img src="images/l.jpg" alt=" " class="img-responsive" />
						<h4>Nguyen Lan <span>Người quản lý</span></h4>
						<ul class="phone-mail">
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>DD: 0968954840</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">nguyenlan220897@gmail.com</a></li>
						</ul>
						<ul class="social-icons">
							<li><a href="#" class="facebook"></a></li>
							<li><a href="#" class="twitter"></a></li>
							<li><a href="#" class="g"></a></li>
							<li><a href="#" class="instagram"></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->
@endsection	