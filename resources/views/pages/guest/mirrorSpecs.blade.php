@extends('includes.app')

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
					<h1>Beschrijving van wat voor hardware er word gebruikt</h1>
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit eu magna id vehicula. Ut ac rhoncus lacus. Integer non ultrices ante. </h5>
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
						<p>Hier komen verschillende uitleg blokken over wat je er allemaal mee kan </p>
					</div>
				</div>
				<div class="information2">
					<div class="logo">
						<i class="fas fa-user"></i>
					</div>
					<div class="tekst">
						<p>Hier komen verschillende uitleg blokken over wat je er allemaal mee kan </p>
					</div>
				</div>
				<div class="information3">
					<div class="logo">
						<i class="fas fa-gamepad"></i>
					</div>
					<div class="tekst">
						<p>Hier komen verschillende uitleg blokken over wat je er allemaal mee kan </p>
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