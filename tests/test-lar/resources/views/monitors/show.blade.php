@props(['monitor'=>$monitor])
@extends('layouts.main')
@section('head')
	@vite('resources/css/selective.css')
	@vite('resources/js/monitor.js')
@endsection
@section('popups')
<div class="pop-up">
	<div id="bg" class="hide"></div>
	<div class="pop-up-container">
		<h1>Are you sure?</h1>
		<form action="{{route('monitors.destroy', $monitor)}}" method='POST'>
			@csrf
			@method('DELETE')
			<div class="buttons">
				<button class="basic-button" type="submit">delete</button>
				<div class="basic-button hide">Cancel</div>
			</div>
		</form>
	</div>
</div>

@endsection
@section('content')
	<div class="dashboard">
		<div class="dashboard-top">
			<h1>Monitor {{$monitor->id}}</h1>
			<button id="monitor" class="basic-button show">Cancel Monitoring</button>
		</div>
		<div class="dashboard-content">
			@php
				$powerplants = $monitor->powerPlants;
				$difference = $monitor->value_goal - array_sum(array_map(fn($powerplant) => $powerplant['value'],$powerplants->toArray()))/count($powerplants);
			@endphp
			<h1>AVG VALUE: {{array_sum(array_map(fn($powerplant) => $powerplant['value'],$powerplants->toArray()))/count($powerplants)}}</h1>
				<div class="flexy">
					<strong>Threshold: {{$monitor->value_goal}}</strong>
					<strong>Difference from threshold: {{abs($difference)}}</strong>
					@php
						// status is depended on the difference from the threshold
						// value is belowe the threshold
						// warning if the value is nearing the threshold
						// and danger if the value is above the threshold
						if($difference > 0){
							$status = 'Good';
						}
						elseif($difference >= -10){
							$status = 'Warning';
						}
						else{
							$status = 'Danger';
						}
					@endphp
				<strong>Status: {{$status}}</strong>
			</div>
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