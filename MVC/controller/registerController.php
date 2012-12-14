<?php

require_once('../autoload.php');

$auth = new AuthDAO();

$authBean = new Auth();
$authBean->setUsername($_POST['username']);
$authBean->setEmail($_POST['email']);
$authBean->setStatus(2);
$authBean->setPassword($_POST['password']);

$auth->insert($authBean);

header('Location: /dashboard.php');
exit;

