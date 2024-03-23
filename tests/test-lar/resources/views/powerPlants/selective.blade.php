@extends('layouts.main')
@section('head')
	@vite('resources/css/selective.css')
@endsection
@section('content')
	<div class="dashboard">
		<div class="dashboard-top">
			<h1>Query #123</h1>
			<button id="save" class="basic-button">Save</button>
			<button id="monitor" class="basic-button">monitor</button>
		</div>
		<div class="dashboard-content">
			<h1>AVG VALUE: 124</h1>
		</div>

	</div>
	<hr>
	<ul class="main-list">
		@foreach ($powerplants as $powerplant)
			<li class="basic-button">
				<strong>
					{{$powerplant->name}}
				</strong>
				<p>
					{{$powerplant->value}}
				</p>
			</li>
		@endforeach
	</ul>
@endsection