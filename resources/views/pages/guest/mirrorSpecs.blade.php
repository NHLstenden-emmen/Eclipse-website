@extends('includes.appguest')
@section('title', 'mirror specs')
@section('content')
    @include('includes\wave')
	<div id='mainLayout' class="mirrorSpecs">
		<div id="home">
			<a href="/" id="homeLink">
				<div class="darkLayer"></div>
				<p>home</p>
			</a>
		</div>
		<div id="mirrorSpecs">
			@include('includes\navbar')
			<div class="primaryContent">
				<div class="textBlock">
					<h1>What is inside the smart mirror</h1>
					<h5>A quick look what is inside the new smart mirror.</h5>
				</div>
				<div class="imgBlock">
				</div>
			</div>
			<div class="secondContent">
				<div class="information1">
					<div class="logo">
						<i class="fas fa-cogs"></i>
					</div>
					<div class="tekst">
						<p>The smart mirror will controlled by a small computer "Raspberry PI".</p>
					</div>
				</div>
				<div class="information2">
					<div class="logo">
						<i class="fas fa-user"></i>
					</div>
					<div class="tekst">
						<p>Behind the mirror there is a monitor that will show all your personal widgets.</p>
					</div>
				</div>
				<div class="information3">
					<div class="logo">
						<i class="fas fa-gamepad"></i>
					</div>
					<div class="tekst">
						<p>The smart mirror is also equipped with sound speakers and a camera.</p>
					</div>
				</div>
			</div>
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