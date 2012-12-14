<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dashboard - Miss U App</title>
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/style.css" />
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
</head>
<body>

	<header>
		<div class="container">
			<h1><img src="/images/logo.png" alt="Miss Universe" /></h1>
		</div>
	</header>
	<section>
		<div class="container">
			<h2 class="welcome">Welcome, <strong><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'dummy'; ?>  !</strong> | <a href="/">Logout</a></h2>
			<a href="#send-poll" data-toggle="modal" class="btn btn-xlarge btn-pink btn-block"><i class="icon-envelope"></i> Send Poll</a>
			<div id="send-poll" class="modal hide fade">
		    	<div class="modal-header">
		    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		    		<h3>Send Poll</h3>
		    	</div>
		    	<div class="modal-body">
		    		<form>
		    			<input type="text" placeholder="Email Address">
		    		</form>
		    	</div>
		    	<div class="modal-footer">
		    		<a href="#" class="btn">Close</a>
		    		<a href="#" class="btn btn-pink">Send</a>
		    	</div>
		    </div>
			<ul class="picks">
				<li>
					<h3>1</h3>
					<div class="placeholder">
						<div class="pull-left">
							<img class="photo" src="/images/photo.jpg" alt="Shamcey Supsup" />
						</div>
						<div class="pull-left">
							<h4>Shamcey Supsup</h4>
							<p><i>24 years old</i> | <span>Philippines</span></p>
						</div>
						<div class="pull-right">
							<span class="label">61pts</span>
						</div>
					</div>
				</li>
				<li>
					<h3>2</h3>
					<div class="placeholder">
						<div class="pull-left">
							<img class="photo" src="/images/photo.jpg" alt="Shamcey Supsup" />
						</div>
						<div class="pull-left">
							<h4>Shamcey Supsup</h4>
							<p><i>24 years old</i> | <span>Philippines</span></p>
						</div>
						<div class="pull-right">
							<span class="label">53pts</span>
						</div>
					</div>
				</li>
				<li>
					<h3>3</h3>
					<div class="placeholder">
						<strong class="no-entry">No Entry</strong>
					</div>
				</li>
				<li>
					<h3>4</h3>
					<div class="placeholder">
						<strong class="no-entry">No Entry</strong>
					</div>
				</li>
				<li>
					<h3>5</h3>
					<div class="placeholder">
						<strong class="no-entry">No Entry</strong>
					</div>
				</li>
			</ul>
		</div>
	</section>

	
	
	<!-- Javascript -->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>