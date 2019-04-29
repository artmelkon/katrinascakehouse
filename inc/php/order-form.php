<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="orderForm">
	<section id="FormSection" class="form container order">
		<div class="cake design order">
		<?php foreach($cake_order_img as $value) { ?>
			<div class="cake-container img">
				<div class="cake">
					<img src="<?php echo '../img/order/'.$value.'-150x150.jpg'; ?>">
				</div>
				<div class="class-title">
					<?php echo $value; ?>
				</div>
				<div class="cake-check">
					<input type="radio" name="cake" value="<?php echo $value; ?>" required>
				</div>
			</div>
		<?php } ?>
		</div>
		<div id="personalInfo" class="personal-info order column">	
			<div class="fname pinput">
				<input type="text" placeholder="First Name" name="fname" value="<?php echo $fname ?>" required>
			</div>
			<div class="lname pinput">
				<input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" required>
			</div>
			<div class="email pinput">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="phone pinput">
				<input type="text" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>">
			</div>
			<div class="address-1 pinput">
				<input type="text" placeholder="Address 1" name="address_1" value="<?php echo $address_1; ?>" required>
			</div>
			<div class="address-2 pinput">
				<input type="text" placeholder="Address 2" name="address_2" value="<?php echo $address_2; ?>">
			</div>
			<div class="city pinput">
				<input type="text" placeholder="City" name="city" value="<?php echo $city; ?>" required>
			</div>
			<div class="state-zip">
				<input type="text" placeholder="California" name="state" value="California">
				<input type="text" pattern="[0-9]{5}" name="zip_code" title="Five digit zip code" placeholder="Zip-code" value="<?php echo $zip_code; ?>" required>
			</div>
			<div class="message">
				<textarea name="message" form="orderForm" placeholder="Your message here..." value="<?php echo $message; ?>"></textarea>
			</div>
		</div>
		<div class="div-line horizontal vertical column"></div>
		<div id="cakeInfo" class="cake-options order column">
		<div class="cake-input hdr">Select Delivery Time</div>
			<div class="delivery-time-container">			
				<div class="delivery-time select">
					<select name="hour" form="orderForm" required>
						<option>--Select Time--</option>
						<?php
							for($i=1; $i<=12; $i++) {
								$f_option = '<option value="'.$i.'">';
								$f_option.= $i.'</option>';
								echo $f_option;
							}
						?>
					</select>
					<label>AM</label>
					<input type="radio" name="time_format" value="AM" required>
					<label>PM</label>
					<input type="radio" name="time_format" value="PM" required>
				</div>
			</div>
			<div class="div-line horizontal"></div>
			<div class="cake-input hdr">Select Your Cake Shape</div>
			<div class="cake-shape-container">
				<span class="square-cake cinfo">
					<input type="radio" name="cake_shape" value="square" required>
				</span>
				<span class="round-cake cinfo">
					<input type="radio" name="cake_shape" value="round" required>
				</span>
			</div>
			<div class="div-line horizontal"></div>
			<div class="cake-input hdr">Select Cake Filling</div>
			<div class="cake-filling-container">
				<span class="cake-filling select">
					<select name="cake_filling" form="orderForm" required>
						<option>--Select Filling--</option>
						<option value="vanilla">Vanilla</option>
						<option value="chocolate">Chocolate</option>
						<option value="mocha">Mocha</option>
						<option value="custard">Custard</option>
					</select>
				</span>
			</div>
			<div class="div-line horizontal"></div>
			<div class="cake-input hdr">Select Sponge Type</div>
			<div class="sponge-type-container">
				<span class="sponge-type select">
					<select name="cake_sponge" form="orderForm" required>
						<option>--Select Sponge Type--</option>
						<option value="vanilla">Vanilla</option>
						<option value="chocolate">Chocolate</option>
						<option value="mocha">Red Velvet</option>
					</select>
				</span>
			</div>
			<input type="hidden" name="f_val" value="2" form="orderForm">
			<input type="hidden" name="subject" value="Order Form">
		</div>
		<div class="form-btn">
			<button>Submit</button>
		</div>
		<div class="additional-enquiry"><?php echo $ADDITIONAL_ENQUIRY; ?></div>
	</section>
</form>
