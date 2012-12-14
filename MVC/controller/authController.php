<?php

//var_dump($_POST);
require_once('../autoload.php');

$auth = new AuthDAO();
$all = $auth->selectAll();

var_dump($all);


exit;
?>