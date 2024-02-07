<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posty</title>
	
	@vite('resources/js/app.js')
</head>
<body class="bg-gray-200">
	<nav class="p-6 bg-white flex justify-between mb-6">
		<ul class= "flex items-center">
			<li>
				<a href="/" class= "p-3">home</a>
			</li>
			<li>
				<a href="{{route('dashboard')}}" class= "p-3">dashboard</a>
			</li>
			<li>
				<a href="{{route('posts')}}" class= "p-3">post</a>
			</li>
		</ul>

		<ul class= "flex items-center">
			@auth
			<li>
				<a href="home" class= "p-3">Arison</a>
			</li>
			<li>
				<form action="{{route('logout')}}" method="post" class="p-3 inline">
				@csrf
					<button type="submit">Logout</button>
				</form>
			</li>
			@endauth

			@guest
			<li>
				<a href="{{route('login')}}" class= "p-3">Login</a>
			</li>
			<li>
				<a href="{{ route('register')}}" class= "p-3">register</a>
			</li>
			@endguest
		</ul>

	</nav>


	@yield('content')
	
</body>
</html>