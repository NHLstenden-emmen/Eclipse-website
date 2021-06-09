@extends('includes.app')

@section('content')
    @include('includes\wave')
	<div id='mainLayout' class="widgets">
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
			@include('includes\navbar')
			<div class="primaryContent">
				<div class="textBlock">
					<h1>Beschrijving van de verschillende widgets</h1>
					<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit eu magna id vehicula. Ut ac rhoncus lacus. Integer non ultrices ante. </h5>
				</div>
				<div class="imgBlock">
				</div>
			</div>
			<div class="secondContent">
				<div class="information1">
					<div class="logo">
						<i class="far fa-clock"></i>
					</div>
					<div class="tekst">
						<p>uitleg over de klok en dat je verschillende timezones kan instellen</p>
					</div>
				</div>
				<div class="information2">
					<div class="logo">
						<i class="fas fa-cloud-moon-rain"></i>
					</div>
					<div class="tekst">
						<p>een beschrijving van hoe de weer widget werkt en wat je er mee kan</p>
					</div>
				</div>
				<div class="information3">
					<div class="logo">
						<i class="fas fa-calendar-alt"></i>
					</div>
					<div class="tekst">
						<p>een calendar met nationale feest dagen en informatie van de gebruiker</p>
					</div>
				</div>
			</div>
		</div>
		<div id="setup">
			<a href="setup" id="setupLink">
				<div class="darkLayer"></div>
				<p>setup</p>
			</a>
		</div>
	</div>
@endsection