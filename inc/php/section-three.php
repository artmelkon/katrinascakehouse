
<section class="section-row three container">
<?php
	if($page == '/index.php') { ?>
	<div class="section-occasion home-section reverse bgcolor am-wide100 flex">
		<div class="section-text-cnt am-wide100">
			<div class="title hd1 am-w600">
				<?php echo $TITLE_THREE; ?>
			</div>
			<div class="section-text one subtitle">
				<?php echo $SUBTITLE_THREE; ?>
			</div>		
			<a href="<?php echo $order; ?>" class="red btn">learn more</a>
		</div>
		<div class="sct-img-container">
			<img src="<?php echo $IMAGE_THREE; ?>">
		</div>
	</div>
	<?php } elseif ($page == 'wedding') {
		$engagement_cake->cakeGallery();
	} else {
		echo "404 Page Not Found!";
	} ?>
</section>