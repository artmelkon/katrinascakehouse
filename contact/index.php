<?php 
	$page = 'contact';
	$fname = $lname = $email = $subject = $message = "";
	$nameErr = $emailErr = $subjectErr = "";
	$f_val = 0;

	include_once '../inc/php/include_files.php';
	include_once $file_validate_form;

	function header_location () {
		header("Location:  /thankyou-page.php");
	}

ob_start();

include_once $file_hero_img;
include_once $file_contact_form;

$content = ob_get_clean();

include_once '../inc/php/template.php';
?>
