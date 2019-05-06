@extends('backend.master')
@section('title','Sửa sản phẩm')
@section('content')

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">SỬA SẢN PHẨM</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    	@include('errors.note')
                        <!-- /.panel-heading -->
                        <form role="form" method="POST" enctype="multipart/form-data" name="frm_addUser" class="container-fluid">
                            <div class="form-group col-sm-6">
                                <label for="#addTitleNews">Tên sản phẩm<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_name" class="form-control" id="addTitleNews" placeholder="Nhập tên sản phẩm..." value="{{$product->prod_name}}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="#addDescriptionNews">Dung tích<span class="star-custom">*</span>
                                </label>
                                <input required class="form-control" name="prod_capacity" id="addDescriptionNews" placeholder="Nhập dung tích ..." value="{{$product->prod_capacity}}">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="#addTitleNews">Nhập giá niêm yết<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_price" class="form-control" id="addTitleNews" placeholder="Nhập giá sản phẩm..." value="{{$product->prod_price}}">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="#addTitleNews">Nhập giá giảm<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_price_promotion" class="form-control" id="addTitleNews" placeholder="Nhập giá giảm..." value="{{$product->prod_price_promotion}}">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="#addTitleNews">Hãng sản xuất <span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_producer" class="form-control" id="addTitleNews" placeholder="Nhập hãng sx..." value="{{$product->prod_producer}}">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="#addTitleNews">Kiểu nắp<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_cap_type" class="form-control" id="addTitleNews" placeholder="Nhập kiểu nắp..." value="{{$product->prod_cap_type}}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="#addTitleNews">Chất liệu nòng cốt<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_material" class="form-control" id="addTitleNews" placeholder="Nhập chất liệu nòng cốt..." value="{{$product->prod_material}}" >
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="#addTitleNews">Kiểu nồi<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_pot_type" class="form-control" id="addTitleNews" placeholder="Nhập kiểu nồi..." value="{{$product->prod_pot_type}}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="sel1">Danh mục sản phẩm *</label>
                                <select required name="prod_cate" class="form-control" id="sel1" onclick="checkRole('chk', this)">
                                	@foreach($listcate as $cate)
                                    <option value="{{$cate->cate_id}}" @if($product->prod_cate == $cate->cate_id) selected @endif>{{$cate->cate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="#addTitleNews">Bảo hành<span class="star-custom">*</span>
                                </label>
                                <input required type="text" name="prod_warranty" class="form-control" id="addTitleNews" placeholder="Nhập bảo hành..." value="{{$product->prod_warranty}}">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="sel1">Trạng thái *</label>
                                <select required name="prod_status" class="form-control" id="sel1" onclick="checkRole('chk', this)">
                                    <option value="1" @if($product->prod_status==1) checked @endif>Còn hàng</option>
                                    <option value="0" @if($product->prod_status==0) checked @endif>Hết hàng</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Ảnh sản phẩm*</label>
                                <div>
                                    <input type="file" name="images" id="imgInp">
                                </div>
                                <img id='img-upload' width="300px" src="{{asset('images/'.$product->prod_img)}}">
                            </div>
                            <div>
                            <div class="form-group col-sm-4">
                                <label for="sel1">Sản phẩm nổi bật *</label> <br/>
	                                <label class="radio-inline">
										<input type="radio" name="prod_featured" value="1" @if($product->prod_featured == 1) checked @endif>Có
									</label>
									<label class="radio-inline">
										<input type="radio" name="prod_featured" value="0" @if($product->prod_featured == 0) checked @endif>Không
									</label>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="sel1">Sản phẩm mới *</label> <br/>
                                	<label class="radio-inline">
										<input type="radio" name="prod_new" value="1" @if($product->prod_new == 1) checked @endif>Có
									</label>
									<label class="radio-inline">
										<input type="radio" name="prod_new" value="0" @if($product->prod_new == 0) checked @endif>Không
									</label>
                            </div>
                        </div>
                            <div class="form-group col-sm-8">
                                <label for="#addContentNews">Mô tả <span class="star-custom">*</span>
                                </label>
                                <textarea required class="ckeditor" id="addContentNews" name="prod_description" placeholder="Nhập mô tả ..." value="{{$product->prod_description}}"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('description',{
											language:'vi',
											filebrowserImageBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
                            </div>
                            <div class="form-group text-center col-sm-12">
                                <button type="submit" name="add" id="btnAdd" class="btn btn-success">Sửa</button>
                                <a href="{{asset('admin/product')}}" type="submit" name="" id="btnAdd" class="btn btn-success">Hủy bỏ</a>
                            </div>
                            {{csrf_field()}}
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

</body>
@endsection

