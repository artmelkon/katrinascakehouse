<?php
$page = $_SERVER['SCRIPT_NAME'];

if($page === '/index.php') {
	$inc_root = './inc/php/';
} else {
	$inc_root = '../inc/php/';
}
	
	include_once $inc_root.'misc.php';
	include_once $inc_root.'switch.php';
?>