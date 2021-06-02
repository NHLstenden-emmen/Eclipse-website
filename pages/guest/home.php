<?php include "inc/theWave.php"; ?>
<div id='mainLayout' class="home">
	<div id="home">
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
					<i class="fas fa-mobile-alt"></i>
				</div>
				<div class="tekst">
					<p>door een app te gebruiken kan je data naar de server sturen</p>
				</div>
			</div>
			<div class="information2">
				<div class="logo">
					<i class="fas fa-server"></i>
				</div>
				<div class="tekst">
					<p>die data word dan door gestuurd naar de spiegel met widget data</p>
				</div>
			</div>
			<div class="information3">
				<div class="logo">
					<i class="fas fa-tablet-alt"></i>
				</div>
				<div class="tekst">
					<p>dan ontvangt de spiegel alle data en laat het zien op het scherm</p>
				</div>
			</div>
		</div>
	</div>
	<div id="mirrorSpecs">
		<a href="mirrorspecs" id="mirrorSpecsLink">
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