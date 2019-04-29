<?php
    $page = $_SERVER['SCRIPT_NAME'];
    include_once '../inc/php/include_files.php';
    
ob_start();

include_once '../inc/php/hero.php';
?>
<section class="section-row container flex">
<div class="text-content-wrapper am-wide960">
		<div class="title hd1 am-w700 center"><?php echo $SUBTITLE; ?></div>
		<?php foreach($Testimony as $value) { ?>
				<div class="text-cnt txt flex am-wide100" style="border: 1px solid rgba(101, 53, 101, .3);
  background-color: rgba(145, 255, 229, .2);"><div class="testimonial"><q><?php echo $value['testimony']; ?></q>
				</div><div class="t-name"> - <?php echo $value['name']; ?></div></div>
		<?php } ?>
	</div>
</section>
<?php
$content = ob_get_clean();

    include_once '../inc/php/template.php';
?>