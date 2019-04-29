<?php
    include_once '../inc/php/include_files.php';
    ob_start();
?>
<?php
$events_css = ob_get_clean();

ob_start();
include_once $file_hero_img;
include_once $file_jumbotron;
?>
<div id="imageModal">
    <div class="close-btn" onclick="closeImg(this)">&times;</div>
    <div class="modal-image-container">
    <img class="modal-image" />
    </div>
</div>
<div class="events-gallery">
<?php
include_once $file_gallery;
?>
</div>
<?php
$content = ob_get_clean();
    
    include_once '../inc/php/template.php';
?>