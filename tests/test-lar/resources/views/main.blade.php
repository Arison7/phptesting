<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />

	<script>
		const env = "{{env('MIX_MAP_API_KEY')}}"
	</script>
   <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Include Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
	<style>
		#map {
			height: 400px;
			width: 100%;
		}
	</style>
	<title>Document</title>
</head>
<body>
	<div id="map"></div>
</body>
<script type="text/javascript" src="{{Vite::asset('resources/js/map.js')}}"></script>
</html>