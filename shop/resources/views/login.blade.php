<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Rakutenshop</title>
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css">

<!-- js for login and signup forms -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- pop-up-box -->
<script src="/wp-content/themes/w3layouts/js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
			});
		</script>
<!--//pop-up-box -->
<!-- //js for login and signup forms -->


</head>
<body>
	<!-- login -->
		<div class="login-section">
	        <div class="login">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<h3>Login to Rakutenshop</h3>
					</div>
										<div class="modal-body modal-spa">
						<div class="login-form">
							<form action="/login" method="post">
								<!-- if there are login errors, show them here -->
								@if (Session::get('loginError'))
								<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
								@endif
								<p class="alert alert-danger">
									{{ $errors->first('email') }}
									{{ $errors->first('password') }}
								</p>
								<input type="email" class="user" name="email" placeholder="Email" required="">
								<input type="password" class="lock" name="password" placeholder="password" required="" value="">
								<input type="hidden" name="sendbacktopage" value="">
								<div class="signin-rit">
									<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="checkbox" checked="">Remember me</label>
									</span>
									<a class="forgot play-icon popup-with-zoom-anim" href="#small-dialog3">Forgot Password?</a>
								<div class="clear"> </div>
								</div>
								<input type="submit" value="Login">
							</form>
							<p>New to Rakutenshop? <a href="/signup">Create Account</a></p>
							<!--<h5 class="or">(or)</h5>
							<div class="social-icons">
								<ul>
									<li><a href="#"class="facebook"><img src="images/fb.jpg" title="facebook" alt="facebook" /></a></li>
									<li><a href="#"class="twitter"><img src="images/tw.jpg" title="facebook" alt="facebook" /></a></a></li>
									<li><a href="#"class="googleplus"><img src="images/gp.jpg" title="facebook" alt="facebook" /></a></a></li>
								</ul>
							</div>-->
						</div>
					</div>
				</div>
			<!-- //login -->
				</div>
			</div>
<script type="text/javascript">
$(document).ready(function()
{
$("#step5-post").click(function()
{
	$("#step5form").submit(function(e)
	{ e.preventDefault();	//STOP default action
		e.stopImmediatePropagation();

		$("#step5-msg").html("Loading");
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR)
			{
				$("#step5-msg").html(''+data+'');

			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				$("#step5-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
			}
		});

	    e.unbind();
	    //$("#step5form").unbind('submit');
	    //return false;
	});

	//$("#step5form").submit(); //SUBMIT FORM
});

});

</script>


</body></html>