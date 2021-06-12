<div class="topnav" id="myTopnav">
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	</a>
	<a href="/" class="{{ (request()->is('/*')) ? 'active' : '' }}">Home</a>
	<a href="mirrorSpecs" class="{{ (request()->is('mirrorSpecs')) ? 'active' : '' }}">mirrorSpecs</a>
	<a href="widgets" class="{{ (request()->is('widgets')) ? 'active' : '' }}">widgets</a>
	<a href="setup" class="{{ (request()->is('setup')) ? 'active' : '' }}">setup</a>
</div>
<nav>
	<a href="/">
		<img src="img/logo/bigLogo.png" alt="Eclipse Logo">
	</a>
	@auth
		<p><a class="nav-link" href="dashboard">dashboard</a></p>
	@else
		<p><a class="nav-link" href="registration">Sign up</a></p>
	@endauth
</nav>
<script>
  function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	  x.className += " responsive";
	} else {
	  x.className = "topnav";
	}
  }
</script>