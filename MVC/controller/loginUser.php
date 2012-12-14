<?php

require_once('../autoload.php');

$auth = new AuthDAO();
$email = $_POST['email'];
$password = $_POST['password'];

$auth = $auth->selectEmailAndPassword($email,$password);


if(count($auth) > 0)
{
	session_start();
	$auth = $auth[0];
	
	$_SESSION['username'] = $auth->getUsername();
	$_SESSION['email'] = $auth->getEmail();
	
	header('Location: /dashboard.php');
}

else{
	header('Location: /login.php?err=true');
}

exit;

?>