<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('')}}/">
	<meta charset="UTF-8">
	<title>Sửa tin tức</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="backend/dist/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="backend/dist/css/upload-img.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="backend/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="col-sm-12">
			<h1 class="text-center text-info">SỬA TIN TỨC</h1>
		</div>
	</div>
	
	<div class="container">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
                    <div class="panel panel-default">
                    @include('errors.note')
                        <!-- /.panel-heading -->
                        <form role="form" enctype="multipart/form-data" name="frm_addUser" method="POST" class="container-fluid">
                            <div class="form-group">
                                <label for="#addTitleNews">Tên tiêu đề<span class="star-custom">*</span>
                                <span id="mess_title" style="color: red"></span>
                                </label>
                                <input required type="text" name="news_title" class="form-control" id="addTitleNews" placeholder="Nhập tên tiêu đề ..." value="{{$news->news_title}}">
                            </div>
                            <div class="form-group">
                                <label for="#addContentNews">Nội dung <span class="star-custom">*</span>
                                </label>
                                <textarea required class="form-control" id="addContentNews" name="news_content" placeholder="Nhập nội dung ..." value="{{$news->news_content}}"></textarea>
                            </div>
							<div class="form-group">
                                <label>Ảnh *</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span id="brown" class="btn btn-default btn-file">
                                            Duyệt... <input type="file" name="images" id="imgInp">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload' src="{{asset('public/images/'.$news->news_image)}}">
                            </div>
                            <div class="form-group text-center col-sm-12">
                                <button type="submit" name="submit" id="btnAdd" class="btn btn-success">Sửa</button>
                                <a href="{{asset('admin/news')}}" type="submit" name="" id="btnAdd" class="btn btn-success">Hủy bỏ</a>
                            </div>
                            {{csrf_field()}}
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            <div class="col-lg-4"></div>
	</div>
		

		    <!-- jQuery -->
    <script src="backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="backend/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="backend/js/upload-img.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="backend/vendor/raphael/raphael.min.js"></script>
    <script src="backend/vendor/morrisjs/morris.min.js"></script>
    <script src="backend/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="backend/dist/js/sb-admin-2.js"></script>
</body>
</html>

