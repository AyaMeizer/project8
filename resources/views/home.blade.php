@extends('layouts.app')

@section('content')
<div class="landing-hero">
	<img src="images/logo1.png" alt="Logo">
	<div class="row landing-hero-text">
		<h2>MOST COMPLETED</h2>
		<h2 class="text-yellow">FILM REVIEW  &middot;  AND MOVIE</h2>
		
	</div>
	<a href="{{ url('/moviegrid') }}" class="redbtn" >DISCOVER NOW</a>
</div>

@endsection
