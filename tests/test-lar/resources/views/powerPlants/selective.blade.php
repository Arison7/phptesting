@extends('layouts.main')
@section('head')
	@vite('resources/css/selective.css')
	@vite('resources/js/monitor.js')
@endsection
@section('popups')
<div class="pop-up">
	<div id="bg" class="hide"></div>
	<div class="pop-up-container">
		<h1>Add new monitor</h1>
		<form action="{{route('monitors.store')}}" method='POST'>
			@csrf
			<label for="value">Value</label>
			<input type="text" name="value_goal" placeholder="enter value's treshold">
			<label for="user">User</label>
			<input type="text" name="user" disabled value="username">
			@foreach($powerplants as $powerplant)
				<input type="hidden" name="powerplants[]" value="{{$powerplant->id}}">
			@endforeach
			<div class="buttons">
				<button class="basic-button" type="submit">Submit</button>
				<div class="basic-button hide">Cancel</div>
			</div>
		</form>
	</div>
</div>

@endsection
@section('content')
	<div class="dashboard">
		<div class="dashboard-top">
			<h1>Query #123</h1>
			<button id="save" class="basic-button">Save</button>
			<button id="monitor" class="basic-button show">monitor</button>
		</div>
		<div class="dashboard-content">
			<h1>AVG VALUE: {{array_sum(array_map(fn($powerplant) => $powerplant['value'],$powerplants->toArray()))/count($powerplants)}}</h1>
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