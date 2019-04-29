<?php

	if($page ===  '/index.php') {
		$root = './inc/php/';
		$root_css = './inc/css/';
		$root_js = './inc/js/';
		$root_img = './img/';
	} else {
		$root = '../inc/php/';
		$root_css = '../inc/css/';
		$root_js = '../inc/js/';
		$root_img = '../../img/';
	}
	
	$file_head_tag = $root."head_tag.php";
	$file_mobile_nav = $root.'mobile-nav.php';
	$file_top_nav = $root.'top-nav.php';
	$file_hero_img = $root.'hero.php';
	$file_footer = $root.'footer.php';
	$file_order_form = $root.'order-form.php';
	$file_main_css = $root_css.'main.css';
	$file_form_css = $root_css.'form-style.css';
	$file_js = $root_js.'functions.js';
	$file_gallery = $root.'gallery.php';
	$file_jumbotron = $root.'jumbotron.php';
	$file_testimony = $root.'testimony.php';
	$file_contact_form = $root.'contact-form.php';
	$file_validate_form = $root.'form-validation.php';

	// menu directory
	$home = '/';
	$order = '/order/';
	$wedding = '/wedding/';
	$events = '/events/';
	$testimony = '/testimony/';
	$about = '/about/';
	$contact = '/contact/';
	$terms = '/terms-conditions/';
?>