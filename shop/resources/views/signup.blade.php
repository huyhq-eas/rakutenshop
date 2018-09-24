<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>SignUp - Rakutenshop</title>
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css">
</head>
<body>								<!-- signup -->
	<div class="signup-section">
		<div class="signup">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<h3>Sign up form</h3>
				</div>
				<div class="modal-body modal-spa">
					<div class="login-form">
						<form action="/signup" method="post" id="signup">
							<ol>
								<li>
									<input type="text" id="firstname" name="firstname" placeholder="Name e.g. Sam" title="Please enter your Name" required="">
								</li>
								<li>
									<input type="hidden" name="sendbacktopage" value="">
									<input type="email" id="email" name="email" placeholder="e.g. mail@example.com" title="Please enter a valid email" required="">
									<p class="validation01">
										<span class="invalid">Please enter a valid email address e.g. ryan@example.com</span>
										<span class="valid">Thank you for entering a valid email</span>
									</p>
								</li>
								<li>
									<input type="password" class="lock" name="password" placeholder="password" id="password1" required="">
								</li>
								<li>
									<input type="password" class="lock" name="password1" placeholder="confirmpassword" id="password2" required="">
								</li>
							</ol>
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I agree to Rakutenshop <a class="pp" target="_blank" href="#/"> Privacy Policy</a></label>
								</span>
								<div class="clear"> </div>
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<!-- script for password confirmation -->
						<script type="text/javascript">
							window.onload = function () {
								document.getElementById("password1").onchange = validatePassword;
								document.getElementById("password2").onchange = validatePassword;
							}
							function validatePassword(){
							var pass2=document.getElementById("password2").value;
							var pass1=document.getElementById("password1").value;
							if(pass1!=pass2)
								document.getElementById("password2").setCustomValidity("Passwords Don't Match");
							else
							document.getElementById("password2").setCustomValidity('');
							//empty string means no validation error
							}
						</script>
						<!-- //script for password confirmation -->
						<p>Have an Account? <a href="/login">Login</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
			<div class="clear"></div>
		</div>



</body></html>