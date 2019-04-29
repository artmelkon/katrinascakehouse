<?php

include_once './inc/php/include_files.php';

ob_start(); ?>
<section class="hero container">
    <div class="hero-slider flex">
<?php
for ($i=0; $i < count($HERO_IMG); $i++) { ?>
    <div class="hero-img i<?php echo $i; ?>" style="background-image: linear-gradient(rgba(0,0,0, .25), rgba(0,0,0, .25)), url(./img/<?php echo $HERO_IMG[$i]; ?>);">
        <div class="hero-title-container flex">
            <div class="hero-title center"><?php echo $HERO_TITLE[$i]; ?></div>
            <a href="/<?php echo $HERO_URL[$i]; ?>/" class="hero page-btn">learn more</a>
        </div>
    </div>
<?php } ?>
    </div>
</section>
<section class="section-row">
<?php
	foreach($sectionArr as $val) {
		echo $val->specialSct();
    } ?>
</section>
<?php

$content = ob_get_clean();

include_once './inc/php/template.php';
?>