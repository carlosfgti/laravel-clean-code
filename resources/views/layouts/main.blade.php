<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>

		<!--Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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