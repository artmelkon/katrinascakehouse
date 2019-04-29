<?php

	function head_tag($file_head_tag) {
		if(file_exists($file_head_tag)) {
			include_once $file_head_tag;
		} else {
			die($file_head_tag.' file does not exist');
		}
	}
	
	function mobile_nav($file_mobile_nav) {
		if(file_exists($file_mobile_nav)) {
			include_once $file_mobile_nav;
		} else {
			die($file_mobile_nav.' file does not exist.');
		}
	}
	
	function top_menu ($file_top_nav) {
		if(file_exists($file_top_nav)) {
			include_once $file_top_nav;
		} else {
			die($file_menu.' file does not exist');
		}
	}
	
	function hero_img($file_hero_img, $HERO_IMG_1, $HERO_IMG_2, $HERO_IMG_3, $page) {
		if(file_exists($file_hero_img)) {
			include_once $file_hero_img;
		} else {
			die($file_hero_img.' file does not exist');
		}
	}
	
	function section_one($file_section_one, $page, $TITLE_ONE, $SUBTITLE_ONE, $INFO_TEXT_ONE, $IMAGE_ONE) {
		if(file_exists($file_section_one)) {
			include_once $file_section_one;
		} else {
			die('file does not exist');
		}
	}
	
	function section_two($file_section_two, $TITLE_TWO, $SUBTITLE_TWO, $IMAGE_TWO) {
		if(file_exists($file_section_two)) {
			include_once $file_section_two;
		} else {
			die($file_section_two.' file does not exist');
		}
	}
	
	function section_three($file_section_three, $TITLE_THREE, $SUBTITLE_THREE, $BUTTON_THREE, $IMAGE_THREE) {
		if(file_exists($file_section_three)) {
			include_once $file_section_three;
		} else {
			die($file_section_three.' file does not exist');
		}
	}
	
	function footer($file_footer) {
		if(file_exists($file_footer)) {
			include_once($file_footer);
		} else {
			die($file_footer.' file does not exist');
		}
	}
?>