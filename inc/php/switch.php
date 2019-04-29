<?php

switch ($page) {
	case '/terms/index.php':
		$TITLE_PAGE = 'TERMS & CONDITIONS';
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css">';
		break;
	case '/about/index.php':
		$TITLE_PAGE = 'ABOUT';
		$SUBTITLE = 'about katrina\'s cake house';
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css">';
		$HERO_IMG = "./img/hero-img3.jpg";
		$ABOUT_TEXT = '<p>As a child, I would walk into cake shops with a huge smile on my face, as I would get enchanted by the mouthwatering smell of sweets in the oven and colorful decorations adorning the confections. From there, I started having a passion for baking, making cakes for friends and family at home. Growing up, I remember my best memories being centered around sweets.</p>
		<p>Making my footprint in the working world, I wanted to be in a field that I was passionate about, and that was baking. In 2013, I decided to follow my ambitions by opening The Cake House in Woodland Hills, Calif. Since then, I have taken pride in what I do by making quality cakes using the finest ingredients and technique of old-fashioned baking. I love what I do because every day is an adventure and there are always new skills to be learned. With the smile I always have when I create confections, I guarantee that our cakes will make you happy!</p>';
		$SIGNATURE = 'Katrina, Owner of The Cake House';
		break;
	case '/testimony/index.php':
		$TITLE_PAGE = 'TESTIMONIES';
		$SUBTITLE = "customer testimonials";
		$HERO_IMG = "./img/hero-img1.jpg";
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css">';
		$Testimony = array(
			array('testimony' => 'They don\'t just have great customer service but they have one of the best cakes I\'ve ever tasted. I had my son\'s 17th birthday cake ordered from them and it didn\'t just look perfect but it tasted great too. It was filled with delicious custard not too sweet just perfect with chocolate and white cake layers. Their pricing is great too. It was so delicious that one of my guests order her daughter’s birthday cake from them the following day. I\'m definitely coming back for more. Thank you The Cake House!', 'name' => 'JManifa H., Yelp'),
			array('testimony' => 'We\'ve been getting our custom cakes from The Cake House for the last 2-3 years and they never disappoint! If anything, it just gets better and better. They\'ve done our anniversary cakes, birthday cakes and some holiday cakes over the last couple years. I think I\'ve tried all their flavors by now but my favorites would be their chocolate and tiramisu… so good! Katrina is always extremely helpful and also has gone over and beyond on a few occasions to personally hand deliver my cakes to our events when I couldn\'t make the drive out there to pick up myself. Will continue going to them for many more cakes in the future!', 'name' => 'Olivia K., Yelp'), 
			array('testimony' => 'Not only do their cakes look great with amazing attention to detail but it also tastes amazing. Not too heavy, not too sweet. First time ordering I was unsure of flavors and which to go with and I was pleased to find out that with their custom cakes they offer cake tasting. My wife and I went and left even more confused since we truly enjoyed all of them. We went with mocha and our guests were just amazed at how amazing our cake looked and tasted. And the lady who helped us over the phone was really nice and helpful. So glad I found a great local spot. Highly recommend!', 'name' => 'Vic T., Yelp')
		);
		break;
	case '/events/index.php':
		$TITLE_PAGE = 'EVENTS';
		$HERO_IMG = "./img/hero-special-occasion.jpg";
		$SUBTITLE = "Let us make your celebration memorable such as:";
		$EVENT_TITLE = array("Birthdays", "Baptism", "Bar Mitzvah", "Bat Mitzvah", "Brit Milah", "Graduations", "Valentine", "Holidays: Valentine’s Day, Christmas, Chanukah, Thanksgiving, New Years, etc.");
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css"><link rel="stylesheet" href="../inc/css/gallery-modal.css">';		break;
	case '/wedding/index.php':
		$TITLE_PAGE = 'WEDDING';
		$HERO_IMG = "./img/hero-img2.jpg";
		$SUBTITLE = "We can provide a wide range of kosher or natural mini-desserts and cakes for all your wedding celebrations including:";
		$EVENT_TITLE = array("Wedding Cake", "Engagement Desserts", "Shower Party Cakes", "Pre Wedding Celebration Desserts", "Themed groom's cakes");
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css"><link rel="stylesheet" href="../inc/css/gallery-modal.css">';		class Gallery {
			public function __construct($title, $event, $image) {
				$this->title = $title;
				$this->event = $event;
				$this->image = $image;
	
			}

			/* $GALLERY_CLASS = array('wedding', 'engagement'); */
			function cakeGallery() {
				$dop = '<div class="cake-gallery '.$this->event.'">';
				$dop .= '<div class="gallery-title hd1">'.$this->title.'</div>';
				$dop .= '<div class="gallery-container">';
				foreach($this->image as $value) {
					$dop .= '<img src="'.$value.'" class="'.$this->event.'-gallery img" />';
				}
				$dop .= '<a class="btns prev" onclick="slide'.$this->event.'(-1, \''.$this->event.'\')">&#10094;</a>';
				$dop .= '<a class="btns next" onclick="slide'.$this->event.'(1, \''.$this->event.'\')">&#10095;</a>';
				$dop .= '</div></div>';
				echo $dop;
			}
		}
		$image = array('../../img/cake.jpg', '../../img/chocolate-cupcake.jpg', '../../img/carousel-coming-soon.jpg');
		$wedding_cake = new Gallery('wedding cakes', 'wedding', $image);
		$engagement_cake = new Gallery('engagement cake', 'engagement', $image);
		break;
	case '/order/index.php':
		$TITLE_PAGE = 'ORDER';
		$HERO_IMG = "./img/hero-img3.jpg";
		$cake_order_img = array('cake1', 'cake2', 'cake3', 'cake4', 'cake5', 'cake6');
		$fname = $lname = $email = $phone = $address_1 = $address_2 = $city = $zip_code = $message = "";
		$ADDITIONAL_ENQUIRY = "For additional request please contact us at:<br> Phone: (818) 818-1165<br>Email <a href='mailto:order@katrinascakehouse.com'>order@katrinascakehouse.com</a>";
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css"><link rel="stylesheet" href="../inc/css/gallery-modal.css">';
		break;
	case '/index.php':
		$TITLE_PAGE = 'HOME';
		$HERO_IMG = array("hero-img1.jpg", "hero-img2.jpg","hero-img3.jpg", "hero-img1.jpg");
		$HERO_TITLE = array("Make Your Boss or Co-Worker Special With Katrina's Cake!", "Let's Make Your Wedding Cake Special and Affordable", "Special Occasions", "Make Your Boss or Co-Worker Special With Katrina's Cake!");
		$HERO_URL = array("order", "wedding", "events", "order");
		$CSS_PATH = '<link rel="stylesheet" href="../inc/css/main.css">';
		class SpecialSection {
			public function __construct($sct_title, $sct_subtitle, $bgcolor, $imgurl, $btn_bgcolor, $outline_color, $sectionurl) {
				$this->sct_title = $sct_title;
				$this->sct_subtitle = $sct_subtitle;
				$this->bgcolor = $bgcolor;
				$this->outline_color = $outline_color;
				$this->imgurl = $imgurl;
				$this->btn_bgcolor = $btn_bgcolor;
				$this->sectionurl = $sectionurl;
			}

			function specialSct() {
				$dop = '<div class="special-section container am-wide100 flex" style="background-color:#'.$this->bgcolor.'">';
				$dop .= '<div class="sct-img-container"><img src="'.$this->imgurl.'"></div>';
				$dop .= '<div class="section-text-cnt am-wide100">';
				$dop .=	'<div class="title hd1 am-w600">'.$this->sct_title.'</div>';
				$dop .=	'<div class="section-text one subtitle">'.$this->sct_subtitle.'</div>';
				$dop .=	'<a href="'.$this->sectionurl.'" class="page-btn" style="background-color:#'.$this->btn_bgcolor.'; outline: 1px solid #'.$this->outline_color.';">learn more</a></div></div>';
				echo $dop;
			}
		}

		$sectionArr = [
			0 => new SpecialSection('MAKE KATRINA\'S CAKE PART OF YOUR OFFICE CELEBRATION! FREE DELIVERY', '1) Pick A Design 2) Pick A Flavor 3) Free Delivery', 'f9d3a2', './img/35-special.svg', 'ee2528', 'ceffb2', '/order/'),
			1 => new SpecialSection('WEDDINGS AND ENGAGEMENTS', 'Book Your FREE Cake Consultation', 'eb88a4', './img/wedding-cake-hpink-600.jpg', '47c17a', 'ffe375', '/wedding/'),
			2 => new SpecialSection('Birthday and Special Occasions', 'Let Katrina\'s Cake House help you celebrate your special event', '91f7c9', './img/birthday-cake-hgt-300.jpg', 'ee2528', 'ceffb2', '/events/')
		];
		break;
	default:
		$HERO_IMG = "./img/hero-img1.jpg";
		break;
}

?>