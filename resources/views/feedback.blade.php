<!DOCTYPE html>
<html>
<head>
	<title>Feedback Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/feedback.css') }}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<header class="nav justify-content-end">
		<div class="logo">
		<a href="index.html"><img src="https://res.cloudinary.com/walebant/image/upload/v1569272941/samples/enyo-goal/logo.svg"></a>
		</div>
		<nav>
			<ul>
				<li class="signup"><a href="{{ route('register') }}"> Sign Up</a></li>
				<li>
					<form  action="" method="post">
                    <button class="logout-btn" type="submit">Logout</button>
                    </form>
                </li>	
			</ul>
		</nav>
	</header>
<div class="container col-sm-5">

	<div class="text-center w-responsive mx-auto mb-5" id="contact-me">
	<h2>Get in touch!</h2>
	<h6> We look forward to hearing from you</h6>
	</div>

	<div  class="form-group center_div">
		<form onsubmit="validation()" method="post" action="#">
			<input id="your-name" type="text" name="name" placeholder="Your Name" class="form-control" required autofocus><br>
			<input id="your-email" type="email" name="e-mail" placeholder="Your E-mail" class="form-control" required><br>
			<textarea id="your-message" type="text" name="message" placeholder="Your Message" rows="12" class="form-control" required>
			</textarea><br>
			<div class="text-center w-responsive mx-auto mb-4"><button type="submit">Submit</button></div>
		</form>
	</div>

	<div class="text-center w-responsive mx-auto mb-5">
		<p>Need a quick answer?</p>
		<p><a href="{{ route('faq') }}">Click here to see answers to questions frequently asked by users.</a></p>
	</div>

</div>
<script type="text/javascript">
	function validation() {
			var user_name = document.getElementById("your-name").value;
			var user_message = document.getElementById("your-message").value;

			if (user_name==null || user_name=="") {
				alert("Name must be at least 4 characters long");
				return false;
			} else if (user_message.length < 20) {
				alert("Message must be at least 20 characters long");
				return false;
			}
			else{
				return true;

			}
				
		}
</script>

</body>
</html>
