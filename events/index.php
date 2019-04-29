<?php
    include_once '../inc/php/include_files.php';
    ob_start();
?>
<style>
    /* ### events cake gallery modal ### */
    #imageModal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
        background-color: rgba(0,0,0, 0.95);
        overflow: auto;
        z-index: 5;
    }

    .close-btn {
        font-size: 38px;
        position: absolute;
        top: 20px;
        right: 20px;
        color: #fff;
        cursor: pointer;

    }

    .modal-image-container {
        margin: 120px auto;
        width: 75%;
    }

    .modal-image-container img {
        width: 100%;
    }

    @media screen and (min-width: 769px) {
        .modal-image-container {
            width: 55%;
        }
    }
</style>
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