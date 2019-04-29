<?php
// initializing email variables
$fname = $lname = $email = $phone = $address_1 = $address_2 = $city = $state = $zip_code = $message = $cake = $hour = $time_format = $cake_shape = $cake_filling = $cake_sponge = "";

include_once '../inc/php/include_files.php';
include_once $file_validate_form;


ob_start();
include_once $file_hero_img;
?>
<div style="padding: 15px !important; text-align: center;font-size: 25px !important;">
  <a href="#Gallery" id="Top">View Gallery</a>
</div>

<?php
//echo $_SERVER['SCRIPT_NAME'];
include_once $file_order_form;
?>
<hr />
<div id="imageModal">
    <div class="close-btn" onclick="closeImg(this)">&times;</div>
    <div class="modal-image-container">
    <img class="modal-image" />
    </div>
</div>
<div id="Gallery" class="events-gallery">
<?php
    include_once $file_gallery;
?>
</div>
<div style="padding: 15px !important; text-align: center;font-size: 25px !important;">
  <a href="#Top">Top</a>
</div>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>