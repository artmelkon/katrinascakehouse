<?PHP

	/* $name = $email = $subject = $message = "";
	$nameErr = $emailErr = $subjectErr = "";
	$f_val = "0"; */
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
	//if(isset($_POST['form'])) {
		
		if(empty($_POST['fname'])) {
			$formErr = "First Name Required";
			exit(errorForm($formErr));
		} else {
			$fname = test_input($_POST['fname']);
			if(preg_match('/[^a-zA-Z\d]$/', $_POST['fname'])) {
				$formErr = "No special character allowed!";
				exit(errorForm($formErr));
			}
		}
		
		if(empty($_POST['lname'])) {
			$formErr = "Last Name Required";
			exit(errorForm($formErr));
		} else {
			$lname = test_input($_POST['lname']);
			if(preg_match('/[^a-zA-Z\d]$/', $_POST['lname'])) {
				$formErr = "No special character allowed!";
				exit(errorForm($formErr));
			}
		}
		
		if(empty($_POST['email'])) {
			$formErr = "Email required!";
			exit(errorForm($formErr));
		} else {
			$email = test_input($_POST['email']);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$formErr = "Invalid email format!";
				exit(errorForm($formErr));
			}
		}
				
		if(!empty($_POST['phone'])) {
			$phone = test_input($_POST['phone']);
		}

		if(!empty($_POST['address_1'])) {
			$address_1 = test_input($_POST['address_1']);
		}
		
		if(!empty($_POST['address_2'])) {
			$address_2 = test_input($_POST['address_2']);
		}
		
		if(!empty($_POST['city'])) {
			$city = test_input($_POST['city']);
		}
		
		if(!empty($_POST['state'])) {
			$state = test_input($_POST['state']);
		}
		
		if(!empty($_POST['zip_code'])) {
			$zip_code = test_input($_POST['zip_code']);
		}
		
		if(empty($_POST['subject'])) {
			$fomrErr = "Subject required!";
			exit(errorForm($formErr));
		} else {
			$subject = test_input($_POST['subject']);
		}
		
		if(!empty($_POST['message'])) {
			$message = test_input($_POST['message']);
		}
		
		//collecting data for cake
		if(!empty($_POST['cake'])) {
			$cake = test_input($_POST['cake']);
		}
		
		if(!empty($_POST['hour'])) {
			$hour = test_input($_POST['hour']);
		}
		
		if(!empty($_POST['time_format'])) {
			$time_format = test_input($_POST['time_format']);
		}
		
		if(!empty($_POST['cake_shape'])) {
			$cake_shape = test_input($_POST['cake_shape']);
		}
		
		if(!empty($_POST['cake_filling'])) {
			$cake_filling = test_input($_POST['cake_filling']);
		}
		
		if(!empty($_POST['cake_sponge'])) {
			$cake_sponge = test_input($_POST['cake_sponge']);
		}
		
		if(!empty($_POST['f_val'])) {
			$f_val = $_POST['f_val'];
		}
		
		if($f_val == 1) {
			
			$to = "info@katrinascakehouse.com";
			$messageBody = "Name: ".$fname." ".$lname."\n\nMessage: ".$message;

			$emailSend = mail($to, $subject,$messageBody, "From: ".$email);

		} elseif ($f_val == 2) {

			$to = "info@katrinascakehouse.com";
			$messageBody = "Name: ".$fname." ".$lname."\n\nPhone: ".$phone.
			"\n\nAddress: ".$address_1." ".$address_2."\n\nCity: ".$city."\n\nState: ".$stat." ".$zip_code."\n\nMessage: ".$message."\n\nDelivery Time: ".$hour.$time_format."\n\nCake Design: #".$cake.", Cake Shape: ".$cake_shape.", Cake Filling: ".$cake_filling.", Cake Sponge: ".$cake_sponge;


			$emailSend = mail($to, "Subject: ".$subject, "Message: ".$messageBody, "From: ".$email);
		}
			
		if($emailSend && $f_val == 1) {
			//header_location();
			header('Location: thankyou-page.php');
			//exit;
		} elseif ($emailSend && $f_val == 2) {
			header("Location: ../contact/thankyou-page.php");
		} else {
			echo "Failed to send!";
		}
		
	}
	
	//strip validation data
		
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function errorForm($formErr) {
		echo "<p style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); color: red; font weight: 500; font-size: 28px; margin:0; padding:0;'>".$formErr."</p>";
		
	}

?>