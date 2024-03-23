@extends('layouts.main')

@section('head')   
   <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Include Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
	
@endsection
@section('content')
	<div id="map"></div>
	<form action="{{route('powerPlants.selective.index')}}" method="POST" id="query"> 
		@csrf
		@if(session('status'))
			<p class="is-warning">{{session('status')}}</p>
		@endif


		<input type="submit" value="Query" id="submit">
	</form>
@endsection
@section('scripts')
	<script type="text/javascript" src="{{Vite::asset('resources/js/map.js')}}"></script>
@endsection