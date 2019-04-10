@extends('backend.master')
@section('title','home')
@section('content')
<body>
    
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Trang chủ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">145</div>
                                    <div>SẢN PHẨM</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-exclamation-triangle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>TIN TỨC</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gavel fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">72</div>
                                    <div>GT</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- The Modal -->
      <div class="modal fade bd-example-modal-sm" id="myModal">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title text-center">THÔNG TIN CÁ NHÂN</h4>
               </div>
               <!-- Modal body -->
               <div class="modal-body container-fluid">
                    <div class="card">
                          <img class="card-img-top container-fluid col-sm-4" src="" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title"><b><i>Tên tài khoản * :<i></b>: lan_nguyen</p>
                            <p class="card-title"><b><i>Họ và tên * :<i></b>: Nguyễn Thị Lan</p>
                            <p class="card-title"><b><i>Tuổi * :<i></b>: 22</p>
                            <p class="card-title"><b><i>Địa chỉ * :<i></b>: Đông Anh - Hà Nội</p>
                            <p class="card-title"><b><i>Giới tính * :<i></b>: Nữ</p>
                            <p class="card-title"><b><i>Email * :<i></b>: nguyenlan220897@gmail.com</p>
                            <p class="card-title"><b><i>Số điện thoại * :<i></b>: 0968954840</p>
                            <p class="card-title"><b><i>Vai trò * :<i></b>: Quản trị viên</p>
                            <p class="card-title"><b><i>Mô tả * :<i></b>: Không có.</p>
                          </div>
                    </div>
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
               </div>
            </div>
         </div>
      </div>
    <!-- /#wrapper -->
    <div id="myModal"  class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">This is Modal</h4>
          </div>
          <div class="modal-body">
            <p>Modal body</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- jQuery -->

</body>
@endsection

