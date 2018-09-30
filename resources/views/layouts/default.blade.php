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
				@yield('content')
				@include('layouts._footer')
			</div>
		</div>
	</body>
</html>
