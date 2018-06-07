<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>

		<!--CSS Laravel MIX-->
		<link rel="stylesheet" href="{{ url('css/app.css') }}">
	</head>
	<body>
		<div id="app">
			<div class="container">
				@yield('content')
			</div>
		</div>

		<!--Laravel Mix APP-->
		<script src="{{ url('js/app.js') }}"></script>

		<!--dynamic scripts-->
		@stacks('scripts')
	</body>
</html>