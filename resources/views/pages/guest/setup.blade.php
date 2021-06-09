@extends('includes.app')

@section('content')
    @include('includes\wave')
	<div id='mainLayout' class="setup">
		<div id="home">
			<a href="/" id="homeLink">
				<div class="darkLayer"></div>
				<p>home</p>
			</a>
		</div>
		<div id="mirrorSpecs">
			<a href="mirrorSpecs" id="mirrorSpecsLink">
				<div class="darkLayer"></div>
				<p>mirror specs</p>
			</a>
		</div>
		<div id="widgets">
			<a href="widgets" id="widgetsLink">
				<div class="darkLayer"></div>
				<p>widgets</p>
			</a>
		</div>
		<div id="setup">
			@include('includes\navbar')
			<div class="primaryContent">
				<div class="textBlock">
					<h1>How to setup your own smart mirror.</h1>
					<h5>A small and quick installation guide for your smart mirror.</h5>
				</div>
				<div class="imgBlock">
				</div>
			</div>
			<div class="secondContent">
				<div class="information1">
					<div class="logo">
						<i class="fas fa-plug"></i>
					</div>
					<div class="tekst">
						<p>Place your new smart mirror near a wall outlet and connect it.</p>
					</div>
				</div>
				<div class="information2">
					<div class="logo">
						<i class="fas fa-wifi"></i>
					</div>
					<div class="tekst">
						<p>On the app the setup will start, after the setup the smart mirror is connected to the wifi and usable.</p>
					</div>
				</div>
				<div class="information3">
					<div class="logo">
						<i class="fas fa-users"></i>
					</div>
					<div class="tekst">
						<p>Now you are ready to go!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection