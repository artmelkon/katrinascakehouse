<?php
include_once '../inc/php/include_files.php';

ob_start();
include_once $file_hero_img;
?>
<section class="section-row container flex">
<div class="text-content-wrapper">
    <div class="title hd1 center am-w700"><?php echo $SUBTITLE; ?></div>
    <div class="section-text container padding-large am-wide960">
        <?php echo $ABOUT_TEXT; ?>
    </div>
</div>
</section>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>