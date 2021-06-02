<?php include "inc/theWave.php"; ?>
<div id='mainLayout' class="mirrorSpecs">
	<div id="home">
		<a href="home" id="homeLink">
			<div class="darkLayer"></div>
			<p>home</p>
		</a>
	</div>
	<div id="mirrorSpecs">
		<?php include "inc/navbar.php"; ?>
		<div class="primaryContent">
			<div class="textBlock">
				<h1>Uitleg over wat de mirror is</h1>
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit eu magna id vehicula. Ut ac rhoncus lacus. Integer non ultrices ante. </h5>
			</div>
			<div class="imgBlock">
				<?php
					$dir = 'images/guestImages/illustrations/';
					$spesificPage = "/" . basename(__FILE__, '.php') . "/";
					$countSvg = 0;
					foreach (glob($dir."*.svg") as $filename) {
						$name = str_replace($dir, "", $filename);
						$name = str_replace(".svg", "", $name);
						if (preg_match($spesificPage, $name))
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
				?>
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