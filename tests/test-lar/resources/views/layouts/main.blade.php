<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	@yield('head')
	@vite('resources/css/main.css')
	<title>Proof of concept</title>
</head>
<body>
	<nav class="nav-container">
		<ul class="nav-list">
			<li><a href="{{route('powerPlants.index')}}">Power Plants</a></li>
		</ul>
		<ul class="nav-list">
			<li>Username</li>
		</ul>
	</nav>
	<div class="background">
		<div class="container">
			@yield('content')
		</div>
	</div>
</body>
	@yield('scripts')
</html>
