<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />

   <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Include Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
	<style>
		#map {
			height: 400px;
			width: 500px;
			position: relative;
		}
		.container {
			height: 500px;
			width: 500px;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
			position: absolute;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		#submit {
			margin-top: 10px;

		}

		.is-red {
			opacity: 0.5;
		}
	</style>
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div id="map"></div>
		<form action="{{route('powerPlants.selective.index')}}" method="POST" id="query"> 
			@csrf
			<input type="submit" value="Submit" id="submit">
		</form>
	</div>
</body>
<script type="text/javascript" src="{{Vite::asset('resources/js/map.js')}}"></script>
</html>