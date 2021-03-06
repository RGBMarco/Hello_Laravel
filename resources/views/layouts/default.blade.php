<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title','Sample')</title>
		<link rel="stylesheet" href="/css/app.css"></link>
	</head>
	<body>
		@include('layouts._header')
		<div class="container">
			<div class="col offset-1 col-10">
				@include('shared._messages')
				@yield('content')
				@include('layouts._footer')
			</div>
		</div>
		<script src="/js/app.js"></script>
	</body>
</html>
