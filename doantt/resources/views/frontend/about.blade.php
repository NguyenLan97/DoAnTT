@extends('frontend.master')
@section('title','Giới thiệu')
@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{asset('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Giới thiệu</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--typography-page -->
	<div class="typo">
		<div class="container">
			<div class="typo-grids">
			<h3 class="title animated wow zoomIn" data-wow-delay=".5s">Kitchen Art</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Thương hiệu bán đồ gia dụng bán chạy nhất, giá cả phải chăng và luôn luôn cập nhật những sản phẩm hiện đại, mới nhất.</p>			   
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Giới thiệu chung</a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Lĩnh vực hoạt động</a></li>
						<li role="presentation" class="dropdown">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Tầm nhìn và Năng lực <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
								<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Tầm nhìn sứ mệnh</a></li>
								<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Năng lực cốt lõi</a></li>
							</ul>
						</li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<p>
								<span style="font-size:14px;">
									<strong>Tên cửa hàng</strong>: Kitchen Art
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Tên viết tắt</strong>: KiA
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Giấy chứng nhận đăng ký doanh nghiệp</strong>: số 0102852927 do Sở KHĐT TP. Hà Nội cấp lần đầu<br>
									ngày 11/08/2008, thay đổi lần thứ 5 ngày 11/03/2016
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Trụ sở đăng ký</strong>: Số 9, ngõ 298 đường Đê La Thành, Phường Thổ Quan, Quận Đống Đa, TP. Hà Nội
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Địa chỉ VPGD</strong>: Số 352 Đường Giải Phóng, Phường Giáp Bát, Quận Thanh Xuân, TP. Hà Nội
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Địa chỉ tổng kho Hà Nội</strong>: Số 352 Đường Giải Phóng, Phường Giáp Bát, Quận Thanh Xuân, TP. Hà<br>
									Nội
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Địa chỉ nhà máy</strong>: Khu 4, Thị trấn Đông Anh, Hà Nội
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Chi nhánh HCM</strong>: Số 75, Đinh Bộ Lĩnh, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Min
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>Chi nhánh Đà Nẵng</strong>: 240 Điện Biên Phủ, TP. ĐÀ Nẵng
								</span>
							</p>
							<p>&nbsp;</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
							<p>
								<span style="font-size:14px;">Cửa hàng Kitchen Art hoạt động trong lĩnh vực nhập khẩu và phân phối các sản phẩm đồ da dụng tại thị trường Việt Nam. Các sản phẩm và dịch vụ chủ đạo:
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>1. Nồi điện, nồi cơm điện</strong>: Nồi cơm điện, Nồi áp suất điện, Nồi đa năng điện, ...</span></p>
							<p>
								<span style="font-size:14px;">
									<strong>2. Lò nướng, bếp nướng</strong>: Lò nướng, Bếp nướng điện, ...
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>3. Thiết bị điện nhà bếp</strong>: Máy đánh trứng, Máy làm tỏi đen, Thiết bị nhà bếp & chế biến khác, ...
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>4. Máy xay, máy ép</strong>: Máy xay sinh tố, Máy ép trái cây, Máy xay thịt, Máy ép đa năng, ...
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>5. Bếp điện, ấm đun</strong>: Bếp hồng ngoại, Bếp điện từ, Ấm đun nước & bình thủy điện, ...
								</span>
							</p>
							<p>
								<span style="font-size:14px;">
									<strong>6. Quạt</strong>: Quạt cây & quạt hộp, Máy làm mát & quạt điều hòa & hơi nước, Quạt xoay treo trần, Quạt sưởi, ...
								</span>
							</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
							<p><span style="font-size:16px;"><strong>TẦM NHÌN 2025</strong></span></p>
							<p><span style="font-size:14px;">Trở thành top 3 thương hiệu đồ gia dụng&nbsp;lớn nhất việt nam và dẫn đầu về chất lượng.</span></p>
							<p><span style="font-size:16px;"><strong>SỨ MỆNH</strong></span></p>
							<p><span style="font-size:14px;">Không ngừng sáng tạo, nghiên cứu&nbsp;các sản phẩm và hiện đại và chất lượng tốt nhất góp phần nâng cao chất lượng cuộc sống của người Việt tốt đẹp hơn và&nbsp;tiện lợi hơn</span></p>
							<p><span style="font-size:14px;"><strong style="font-size: 16px;">GIÁ TRỊ CỐT LÕI</strong></span></p>
							<p><strong style="font-size: 14px;">1. Sáng tạo</strong><span style="font-size: 14px;">: Luôn luôn nghiên cứu,&nbsp;sáng tạo và cải tiến không ngừng&nbsp;để tạo ra các sản phẩm tốt nhất.</span></p>
							<p><span style="font-size:14px;"><strong>2. Hợp tác:</strong> KiA luôn đề cao việc hợp tác phát triển cùng các đối tác với mong muốn cuối cùng là mang đến khách hàng&nbsp;nhiều giá trị nhất.</span></p>
							<p><span style="font-size:14px;"><strong>3. Tinh thần Việt Nam</strong>: Luôn tự hào là thương hiệu Việt Nam chất lượng cao.</span></p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
							<p><span style="font-size:14px;">- Năng lực nhập khẩu, phân phối các sản phẩm với mẫu mã hiện đại, tinh sảo, sang trọng.</span></p>
							<p><span style="font-size:14px;">- Năng lực xây dựng, quản lý và phát triển hệ thống kênh phân phối.</span></p>
							<p><span style="font-size:14px;">- Năng lực xây dựng, phát triển thương hiệu. </span></p>
							<p><span style="font-size:14px;">-Năng lực xây dựng, quản lý và phát triển hệ thống kênh phân phối</span><br>
							&nbsp;</p>
						</div>
					</div>
				</div>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Sản phẩm luôn được chú trọng đến</h3>
				<div class="alert alert-success" role="alert">
					<strong>Chất lượng</strong> 
				</div>
				<div class="alert alert-info" role="alert">
					<strong>Giá cả</strong>
				</div>
				<div class="alert alert-warning" role="alert">
					<strong>Sự hài lòng của khách hàng</strong>
				</div>
				<div class="alert alert-danger" role="alert">
					<strong>Luôn cập nhật xu hướng mới</strong>
				</div>
			</div>
			</div>
		</div>
	</div>
<!-- //typography-page -->
@endsection	