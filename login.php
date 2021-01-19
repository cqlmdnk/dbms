<section class="login" id="login">
       
       <div class="container">
      


  
       <script type="text/javascript" src="assets/js/login.js"></script> 


<div class="container-login" id="container-login">
	<div class="form-container sign-up-container">
		<form action="Business/register_user.php" id="registerAct" method="post">
			<h1>Create Account</h1>
			<span style="font-size: 16px">or use your email for registration</span>
			<input type="text" placeholder="Name" name="username"/>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password"  name="password1"/>
            <input type="password" placeholder="Confirm Password"  name="password2"/>
			<button type="submit" class="sign-in">Sign Up</button>
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
			<span style="font-size: 16px">or use your account</span>
			<input type="username" placeholder="Username" name="username"/>
			<input type="password" placeholder="Password" name="password"/>
			<button type="submit" class="sign-in" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p style="font-size: 16px">To keep connected with us please login with your personal info</p>
				<button class="ghost" onclick="signInButton()" id= "signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p style="font-size: 16px ">Enter your personal details and start journey with us</p>
				<button class="ghost" onclick="signUpButton()" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
       </div>
   </section>
