<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login - Miss U App</title>
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
			<h2>Login</h2>
			<form class="form-horizontal" action = "MVC/controller/loginUser.php" method = "post">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<input type="text" name = "email" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" name = "password" id="inputPassword" placeholder="Password">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox"> Remember me
						</label>
					</div>
				</div>
				<div class="form-actions">
			    	<button type="submit" class="btn btn-pink">Login</button>
					Need an Account? <a href="/register.php">Sign-up</a>
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