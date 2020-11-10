<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/login.css">
<script type="text/javascript" src="assets/js/login.js"></script> 
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>
<script> 

  
</script> 
</head>

<body>
<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="Business/register_user.php" id="registerAct" method="post">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="username"/>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password"  name="password1"/>
            <input type="password" placeholder="Confirm Password"  name="password2"/>
			<button >Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="Business/login_user.php" id="loginAct" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="username" placeholder="Username" name="username"/>
			<input type="password" placeholder="Password" name="password"/>
			<button >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" onclick="signInButton()" id= "signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" onclick="signUpButton()" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		
	</p>
</footer>

</body>

</html>