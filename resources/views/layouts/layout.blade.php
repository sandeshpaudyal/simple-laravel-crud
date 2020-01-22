<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
</head>
<body>
	@include('partials/header')
	@yield('content');
	@include('partials/footer')
	<script src="assets/js/jquery.min.js"></script>
			<script src="{{ asset('assets/js/jquery.poptrox.min.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>