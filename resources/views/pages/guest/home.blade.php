@extends('includes.app')
@section('title', 'home page')
@section('content')
    @include('includes\wave')
	<div id='mainLayout' class="home">
		<div id="home">
			@include('includes\navbar')
			<div class="primaryContent">
				<div class="textBlock">
					<h1>About the mirror</h1>
					<h5>The new personalisable smart mirror for your smart home collection.</h5>
				</div>
				<div class="imgBlock">
					
				</div>
			</div>
			<div class="secondContent">
				<div class="information1">
					<div class="logo">
						<i class="fas fa-mobile-alt"></i>
					</div>
					<div class="tekst">
						<p>by using an app you can send data to the server.</p>
					</div>
				</div>
				<div class="information2">
					<div class="logo">
						<i class="fas fa-server"></i>
					</div>
					<div class="tekst">
						<p>Behind the mirror there is a monitor that show all your personal.</p>
					</div>
				</div>
				<div class="information3">
					<div class="logo">
						<i class="fas fa-tablet-alt"></i>
					</div>
					<div class="tekst">
						<p>then the mirror will receive all the data and show it on the screen.</p>
					</div>
				</div>
			</div>
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
			<a href="setup" id="setupLink">
				<div class="darkLayer"></div>
				<p>setup</p>
			</a>
		</div>
	</div>
@endsection