<?php
$path = $_SERVER['REQUEST_URI'];
$dir = '../img'.$path.'thumb/';

$imgArr = array();

// Open custom cake image directory and read
if(is_dir($dir)) {
	if($dh = opendir($dir) ) {
		while(($file = readdir($dh))  !== false) {
			if($file == '.' || $file == '..') {
				continue;
			}
			//echo 'file '.$file.filetype($dir.$file).'\n';
			array_push($imgArr, $dir.$file);
		}
		foreach($imgArr as $img) {
?>
			<div class="item"><img src="<?php echo $file.$img; ?>" onclick="displayImg(this)" /></div>
<?php	}
				echo '</div>';
				//print_r($imgArr);
				closedir($dh);
    }
}
?>