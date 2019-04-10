<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="../public/quantri/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../public/quantri/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/quantri/dist/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../public/quantri/dist/css/upload-img.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../public/quantri/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/quantri/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="col-sm-12">
			<h1 class="text-center text-info">THÊM MỚI DỮ LIỆU</h1>
		</div>
	</div>
	
	<div class="container">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <form role="form" enctype="multipart/form-data" name="frm_addUser" method="POST" class="container-fluid">
                            <div class="form-group">
                                <label for="#addTitleNews">Tiêu đề <span class="star-custom">*</span>
                                <span id="mess_title" style="color: red"></span>
                                </label>
                                <input type="text" name="title" class="form-control" id="addTitleNews" placeholder="Nhập tiêu đề ...">
                            </div>
                            <div class="form-group">
                                <label for="#addContentNews">Nội dung <span class="star-custom">*</span>
                                </label>
                                <textarea class="form-control" id="addContentNews" name="content" placeholder="Nhập nội dung ..."></textarea>
                            </div>
							<div class="form-group">
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
                            <div class="form-group">
                                <label for="sel1">Loại *</label>
                                <select class="form-control" id="sel1" name="type">
                                	<option value="">Vui lòng chọn</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group text-center col-sm-12">
                                <button type="submit" name="add" id="btnAdd" class="btn btn-success">Thêm</button>
                            </div>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            <div class="col-lg-4"></div>
	</div>
		

		    <!-- jQuery -->
    <script src="../public/quantri/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/quantri/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../public/quantri/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../public/quantri/js/upload-img.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/quantri/vendor/raphael/raphael.min.js"></script>
    <script src="../public/quantri/vendor/morrisjs/morris.min.js"></script>
    <script src="../public/quantri/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../public/quantri/dist/js/sb-admin-2.js"></script>
</body>
</html>