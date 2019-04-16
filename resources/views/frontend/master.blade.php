<!DOCTYPE html>
<html>
<head>
<base href="{{asset('')}}/">
<title>@yield('title')</title>

<base href="http://localhost:8000/doantt/public/">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ url('js/simpleCart.min.js') }}"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui.css') }}">
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ url('js/bootstrap-3.1.1.min.js') }}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="{{ url('css/animate.min.css') }}" rel="stylesheet">

<script src="{{ url('js/wow.min.js') }}"></script>

<script src="{{ url('js/classie.js') }}"></script>
<script src="{{ url('js/uisearch.js') }}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<!-- header -->
    @include('frontend.header');
<!-- //header -->
	@yield('content');
<!-- breadcrumbs -->
	@include('frontend.footer');
<!-- //mail -->
<!-- //footer -->
</body>
</html>