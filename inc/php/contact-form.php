

<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contactForm" />
<section id="contactSection" class="form container contact">
    <div class="personal-info contact column">
        <div class="title hd2">Contact Us</div>
        <div class="fname pinput">
            <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" required>
        </div>
        <div class="lname pinput">
            <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" required>
        </div>
        <div class="email pinput">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="subject pinput">
            <input type="text" placeholder="Subject" name="subject" value="<?php echo $subject; ?>" required>
        </div>
        <div class="message">
            <textarea name="message" placeholder="Your enquiry here...." form="contactForm"></textarea>
        </div>
        <input type="hidden" name="f_val" value="1">
        <div class="form-btn">
            <button>Submit</button>
        </div>
    </div>
    <div class="div-line horizontal vertical"></div>
    <div class="company-info contact column">
        <div class="company-address txt">Address:&nbsp;&nbsp;
            <span>21606 Ventura Blvd<br>Woodland Hills, CA, 91364</span>
        </div>
        <div class="company-phone txt">Phone:&nbsp;&nbsp;
            <span>(818) 818-1165</span>
        </div>
		<div class="google-map mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Address%3A%20%20%2021606%20Ventura%20Blvd%20Woodland%20Hills%2C%20CA%2C%2091364&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-frankfurt/"></a></div>Google Maps by <a href="https://www.embedgooglemap.net" rel="nofollow" target="_blank">Embedgooglemap.net</a></div>
    </div>
</section>
</form>