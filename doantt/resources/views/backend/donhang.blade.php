<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chi tiết</title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/quantri/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../public/quantri/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../public/quantri/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../public/quantri/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/quantri/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/quantri/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
        	include_once("templates/navigation.php");
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h2 class="">ĐƠN HÀNG</h2>
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
                                        <th style="text-align: center;">Tên đơn hàng</th>
                                        <th style="text-align: center;">Đã tạo</th>
                                        <th style="text-align: center;">Chỉnh sửa sau cùng</th>
                                        <th style="text-align: center;">Người tạo</th>
                                        <th style="text-align: center;"></th>
                                        <th style="text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php foreach ($listNewsType as $value): ?>
                                    <tr class="even gradeC">
                                        <td style="text-align: center;"><?= $value['news_type_id'] ?></td>
                                        <td style="text-align: center;"><?= $value['news_type_name'] ?></td>
                                        <td style="text-align: center;" class="center"><?= $value['news_type_created_at'] ?></td>
                                        <td style="text-align: center;" class="center"><?= $value['news_type_updated_at'] ?></td>
                                        <td style="text-align: center;"><?= $value['news_type_editor'] ?></td>
                                        <td style="text-align: center;"><a href=""><i class="fa fa-pencil"></i></a></td>
                                        <td style="text-align: center;"><a href=""><i class="fa fa-remove"></i></a></td>
                                    </tr>
                                    <?php endforeach ?> -->
                                    
                                    
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
    <script src="../public/quantri/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/quantri/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../public/quantri/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../public/quantri/js/custom.js"></script>


    <!-- DataTables JavaScript -->
    <script src="../public/quantri/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../public/quantri/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../public/quantri/vendor/datatables-responsive/dataTables.responsive.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../public/quantri/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
