<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Register - Miss U App</title>
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/style.css" />
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="container">
			<h1><a href="/"><img src="/images/logo.png" alt="Miss Universe" /></a></h1>
		</div>
	</header>
	<section class="login">
		<div class="container">
			<h2>Sign-up</h2>
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label" for="inputName">Name</label>
					<div class="controls">
						<input type="text" id="inputName" placeholder="Name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<input type="text" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" id="inputPassword" placeholder="Password">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputConfirmPassword">Confirm Password</label>
					<div class="controls">
						<input type="password" id="inputConfirmPassword" placeholder="Confirm Password">
					</div>
				</div>
				<div class="form-actions">
			    	<button type="submit" class="btn btn-pink">Sign-up</button>
					Already have an Account? <a href="/login.php">Login</a>
			    </div>
			</form>
		</div>
	</section>

	<!-- Javascript -->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>