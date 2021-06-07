<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes\header')
</head>
<body>
    @include('includes\wave')
	<div class="loginPagina background">
		<div class="loginbox">
			<a href="home">
				<img src="images/logo/bigLogo.png" alt="Eclipse Logo">
			</a>
			<form method="POST">
				<input value="" type="text" name="email" placeholder="email" required>
				<input type="password" name="password" placeholder="password" required>
				<div class="error"></div>
				<label class="check">
					<input type="checkbox" name="remember" id="remember"/>Remember email
				</label><br>
				<button class="inloggen" type="submit">Login</button><br>
			</form> 
		</div>
	</div>
</body>
</html>