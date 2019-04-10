<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HỆ THỐNG QUẢN LÝ BÁN HÀNG ĐỒ ĐIỆN GIA DỤNG </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <ul class="dropdown-menu dropdown-user">
                        <!-- Button to Open the Modal -->
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw"></i> Thông tin</a>
                        </li>

                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{asset('admin/home')}}"><i class="fa fa-home fa-fw"></i> Trang chủ</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Quản lý sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('admin/product/add')}}"><i class="fa fa-plus"></i> Thêm mới</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/product')}}"><i class="fa fa-bars"></i> Danh sách</a>
                                </li>
                             
                            </ul>
                        </li>
                        <li>
                            <a href="{{asset('admin/category')}}"><i class="fa fa-file fa-fw"></i> Quản lý danh mục</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{asset('admin/news')}}"><i class="fa fa-file fa-fw"></i> Quản lý tin tức</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="donhang.php"><i class="fa fa-file fa-fw"></i> Quản lý đơn hàng</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Quản lý Thành viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="them_thanhvien.php"><i class="fa fa-plus"></i> Thêm mới</a>
                                </li>
                                <li>
                                    <a href="danhsach_thanhvien.php"><i class="fa fa-bars"></i> Danh sách</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>