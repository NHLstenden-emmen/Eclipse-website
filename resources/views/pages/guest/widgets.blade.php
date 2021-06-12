@extends('includes.app')
@section('title', 'widget information')

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
					<h1>Which widgets will be available</h1>
					<h5>Here we will show some of the widgets that will be available for the smart mirror.</h5>
				</div>
				<div class="imgBlock">
					
					@php
					$dir = 'img/guestImages/illustrations/';					
					$spesificPage = Route::getFacadeRoot()->current()->uri();
					if ($spesificPage == '/') {
						$spesificPage = 'home';
					}
					$countSvg = 0;
					foreach (glob($dir."*.svg") as $filename) {
						$name = str_replace($dir, "", $filename);
						$name = str_replace(".svg", "", $name);
						$pathLengt = Str::length($spesificPage);
						if (substr($name, 0, $pathLengt) == $spesificPage)
						{
							$countSvg++;
						}
					}
					if ($countSvg > 1) {
						$num = rand(1,$countSvg); 
					} else{
						$num = 1;
					}
					$spesificPage = str_replace("/", "", $spesificPage);
					echo "<img src='".$dir.$spesificPage.$num.".svg' alt='A random illustration for the ".$spesificPage." page'>";
					@endphp
				</div>
			</div>
			<div class="secondContent">
				<div class="information1">
					<div class="logo">
						<i class="far fa-clock"></i>
					</div>
					<div class="tekst">
						<p>A time widget will be available and can be changed to your timezone.</p>
					</div>
				</div>
				<div class="information2">
					<div class="logo">
						<i class="fas fa-cloud-moon-rain"></i>
					</div>
					<div class="tekst">
						<p>A weather widget will be available and can be changed to your location.</p>
					</div>
				</div>
				<div class="information3">
					<div class="logo">
						<i class="fas fa-calendar-alt"></i>
					</div>
					<div class="tekst">
						<p>A calander will be available and your day, month and year will be showed.</p>
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