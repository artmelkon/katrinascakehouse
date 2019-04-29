<!doctype html>
<html>
<head>
<?php 
	include_once $file_head_tag;
	echo $CSS_PATH;
?>
</head>
<body>
	<!-- beginning of mobile nav -->
	<?php include_once $file_mobile_nav; ?>
	<!-- beginning of mobile nav -->
	<header>
		<!-- beginning of main menu -->
		<?php include $file_top_nav; ?>
		<!-- end of main menu -->
	</header>
	<main class="content-wrapper">
		<?php echo $content; ?>
	</main>
	<footer>
		<?php include_once $file_footer; ?>
		<?php //echo $_SERVER['REQUEST_URI']; ?>
	</footer>
</body>
<script type="text/javascript" src="../inc/js/functions.js"></script>
</html>
