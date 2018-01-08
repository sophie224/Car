@extends('layouts.app')

@section('title')

Dashboard

@endsection

@section('content')

@if(isset($chart))
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-bar-chart-o fa-fw"></i> Percentage chart		
		</div>
		<div class="panel-body">
			{!! $chart->html() !!}
		</div>
	</div>
@endif	

@endsection