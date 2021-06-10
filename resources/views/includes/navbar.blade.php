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