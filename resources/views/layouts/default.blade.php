<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/bootstrap/bootstrap.min.css">

    @yield('page-css')
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/main.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/kz-custom.css">

    @yield('styles')

    <style>
    	.border-bottom{
    		border-bottom: 1px solid #cecece;
    	}

    	.cursor-pointer{
    		cursor: pointer;
    	}

    	.cursor-default{
    		cursor: default;
    	}
    </style>
</head>
<body class="horizontal-navigation">
	@include('layouts.header')
	<div class="page-content">
		@yield('content')
	</div>
	@yield('page-css')
	<script src="{{url('public/templates/default')}}/js/lib/jquery/jquery.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/tether/tether.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/plugins.js"></script>
	<script src="{{url('public/templates/default')}}/js/app.js"></script>
	@yield('scripts')
</body>
</html>
