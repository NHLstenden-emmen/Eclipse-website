<nav>
	<a href="/">
		<img src="img/logo/bigLogo.png" alt="Eclipse Logo">
	</a>
	@auth
		<p><a class="nav-link" href="{{ route('dashboard') }}">dashboard</a></p>
	@else
		<p><a class="nav-link" href="{{ route('login') }}">Login</a></p>
	@endauth
</nav>