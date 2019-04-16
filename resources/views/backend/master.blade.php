<!DOCTYPE html>
<html lang="en">

<head>
	<base href="{{asset('')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="backend/dist/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="backend/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="backend/dist/css/style-custom.css" rel="stylesheet">
    <script src="backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="backend/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="backend/vendor/raphael/raphael.min.js"></script>
    <script src="backend/vendor/morrisjs/morris.min.js"></script>
    <script src="backend/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="backend/dist/js/sb-admin-2.js"></script>

    <script type="text/JavaScript" src="editor/ckeditor/ckeditor.js"></script>

</head>

<body>
    @include('backend.navigation');

	@yield('content');
	<script src="backend/js/js-custom.js"></script>
</body>

</html>
