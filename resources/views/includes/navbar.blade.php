<nav>
	<a href="/">
		<img src="img/logo/bigLogo.png" alt="Eclipse Logo">
	</a>
	@auth
		Logged in!
	@else
		<p><a href="login">login</a></p>
	@endauth
</nav>