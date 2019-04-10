@extends('backend.master')
@section('title','Thêm thành viên')
@section('content')

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
        	include_once("templates/navigation.php");
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">THÊM MỚI THÀNH VIÊN</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <form role="form" method="POST" enctype="multipart/form-data" name="frm_addUser" class="container-fluid">
                            <div class="form-group col-sm-8">
                                <label for="#addTitleNews">Tài khoản <span class="star-custom">*</span>
                                <span id="mess_username" style="color: red"></span>
                                </label>
                                <input type="text" name="username" class="form-control" id="addTitleNews" placeholder="Nhập tài khoản ...">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="#addDescriptionNews">Họ tên <span class="star-custom">*</span>
                                </label>
                                <input class="form-control" name="fullname" id="addDescriptionNews" placeholder="Nhập họ tên ...">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="#addTitleNews">Mật khẩu <span class="star-custom">*</span>
                                <span id="mess_password" style="color: red"></span>
                                </label>
                                <input type="password" name="password" class="form-control" id="addTitleNews" onfocus="return checkUsername()" placeholder="Nhập tật khẩu ...">
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="#addTitleNews">Tuổi <span class="star-custom">*</span>
                                </label>
                                <input type="text" name="age" class="form-control" id="addTitleNews" placeholder="Nhập tuổi ...">
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="sel1">Giới tính *</label>
                                <select name="sex" class="form-control" id="sel1">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="#addTitleNews">Nhập lại mật khẩu <span class="star-custom">*</span>
                                <span id="mess_repassword" style="color: red"></span>
                                </label>
                                <input type="password" name="repassword" class="form-control" id="addTitleNews" onfocus=" return checkPassword()" placeholder="Nhập lại mật khẩu ...">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="#addTitleNews">Địa chỉ <span class="star-custom">*</span>
                                </label>
                                <input type="text" name="address" class="form-control" id="addTitleNews" placeholder="Nhập địa chỉ ...">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="#addTitleNews">Email <span class="star-custom">*</span>
                                </label>
                                <input type="text" name="email" class="form-control" id="addTitleNews" onfocus=" return checkRePassword()" placeholder="Nhập địa chỉ Email ...">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="#addTitleNews">Điện thoại <span class="star-custom">*</span>
                                </label>
                                <input type="text" name="phone" class="form-control" id="addTitleNews" placeholder="Nhập số điện thoại ...">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="sel1">Vai trò *</label>
                                <select name="role" class="form-control" id="sel1" onclick="checkRole('chk', this)">
                                    <option value="">Vai trò</option>
                                    <option value="Chỉ xem">Chỉ xem</option>
                                    <option value="Quản trị nội dung">Quản trị nội dung</option>
                                    <option value="Quản trị thành viên">Quản trị thành viên</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Ảnh đại diện *</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span id="brown" class="btn btn-default btn-file">
                                            Duyệt... <input type="file" name="avatar" id="imgInp">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>
                            </div>
                            <div class="form-group col-sm-9">
                                <label>Chọn quyền *</label>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="checkbox" id="chkfull" name="chkfull" onclick="checkAll('chk', this)">
                                        <label>Tất cả</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div style="width: 100%; background: #ccc; padding: 10px; margin-bottom: 15px">
                                            <input type="checkbox" class="chk" name="chk">
                                            <label>Quản lý sản phẩm</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div style="width: 100%; background: #ccc; padding: 10px; margin-bottom: 15px">
                                            <input type="checkbox" class="chk" name="chk">
                                            <label>Quản lý tin tức</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div style="width: 100%; background: #ccc; padding: 10px; margin-bottom: 15px">
                                            <input type="checkbox" class="chk" name="chk">
                                            <label>Quản lý đơn hàng</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div style="width: 100%; background: #ccc; padding: 10px; margin-bottom: 15px">
                                            <input type="checkbox" class="chk" name="chk">
                                            <label>Quản lý thành viên</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="#addContentNews">Mô tả <span class="star-custom">*</span>
                                </label>
                                <textarea class="form-control" id="addContentNews" name="description" placeholder="Nhập mô tả ..."></textarea>
                            </div>
                            <div class="form-group col-sm-8">                               
                                <input type="checkbox" name="chkEnable" value="1">
                                <label>Kích hoạt tài khoản</label>
                            </div>
                            <div class="form-group text-center col-sm-12">
                                <button type="submit" name="add" id="btnAdd" class="btn btn-success">Thêm</button>
                            </div>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
 @endsection
