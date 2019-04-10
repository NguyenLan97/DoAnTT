@extends('backend.master')
@section('title','Danh sách sản phẩm')
@section('content')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h2>DANH SÁCH SẢN PHẨM</h2>
                </div>
                <div class="col-sm-1" style="padding-left: 3.4%">
                        <h2><a  href="{{asset('admin/product/add')}}" class="btn btn-success"><i class="fa fa-plus"></i></a></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">ID</th>
                                        <th style="text-align: center;">Tên sản phẩm</th>
                                        <th style="text-align: center;">Giá niêm yết</th>
                                        <th style="text-align: center;">Giá giảm</th>
                                        <th style="text-align: center;">Ảnh</th>
                                        <th style="text-align: center;">Danh mục SP</th>
                                        <th style="text-align: center;">Chất liệu</th>
                                        <th style="text-align: center;">Dung tích</th>
                                        <th style="text-align: center;">Hãng sx</th>
                                        <th style="text-align: center;"></th>
                                        <th style="text-align: center;"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($productlist as $product)
                                	<tr>
                                		<td style="text-align: center;">{{$product->prod_id}}</td>
                                		<td style="text-align: center;">{{$product->prod_name}}</td>
                                		<td style="text-align: center;">{{number_format($product->prod_price,0,',','.')}}</td>
                                		<td style="text-align: center;">{{number_format($product->prod_price_promotion,0,',','.')}}</td>
                                		<td style="text-align: center;">
                                			<img height="100px"  src="{{asset('../storage/app/images/'.$product->prod_img)}}" class="thumbnail"
                                			>
                                		</td>
                                		<td style="text-align: center;">{{$product->cate_name}}</td>
                                		<td style="text-align: center;">{{$product->prod_material}}</td>
                                		<td style="text-align: center;">{{$product->prod_capacity}}</td>
                                		<td style="text-align: center;">{{$product->prod_producer}}</td>
                                		<td style="text-align: center;">
                                            <a href="{{asset('admin/product/edit/'.$product->prod_id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                        </td> 
                                        <td style="text-align: center;">
                                        	<a href="{{asset('admin/product/delete/'.$product->prod_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-info" style="background: #f0ad4e; border-color: #f0ad4e;"><i class="fa fa-trash-o"></i></a>
                                        </td>                                   
                                    </tr>
         						@endforeach
                                </tbody>
              
                            </table>
                            <!-- /.table-responsive -->
                        </div>
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

