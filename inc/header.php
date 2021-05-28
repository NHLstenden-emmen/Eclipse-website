<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- start favicon -->

		<!-- meta tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="Livestream page for the battle bots">
		<meta name="keywords" content="Eclipse">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Eclipse<?php if (strtolower($pagePath) !== "Eclipse") { echo " - " . $pagePath; } ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

		<!-- style sheet -->
		<link rel="stylesheet" href="css/main/main.css">
		<link rel="stylesheet" href="css/pages/404.css">
		<?php
		// add css to the page
		switch(strtolower($pagePath))
		{
			case 'Eclipse':
			case 'home':
			case 'mirrorspecs':
			case 'widgets':
			case 'setup':
				echo '<link rel="stylesheet" href="css/pages/guest.css">';
				break;
		}
		?> 
    </head>
	<body>