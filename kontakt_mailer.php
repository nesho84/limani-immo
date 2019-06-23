<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$errorEmpty = false;
	$errorEmail = false;

	if (empty($name) || empty($email) || empty($message)) {
		echo "<div class='email_msg_error'><span class='email_msg_closebtn'>&times;</span><p>Bitte füllen Sie alle Formularfelder aus!</p></div>";
		$errorEmpty = true;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<div class='email_msg_error'><span class='email_msg_closebtn'>&times;</span><p>Bitte geben Sie eine gültige Email-Adresse ein!</p></div>";
		$errorEmail = true; 
	}
	else {
		// EDIT THE 2 LINES BELOW AS REQUIRED 
	    $email_to = "ademi.neshat@gmail.com";
	    //$email_to = "info@limani-immo.ch";
	 
	    $email_subject = "Neue Nachricht von www.limmani-immo.ch";

	    // create email headers
	 
		$headers = 'From: '.$email."\r\n".
		 
		'Reply-To: '.$email."\r\n" .
		 
		'X-Mailer: PHP/' . phpversion();

		if (@mail($email_to, $email_subject, $message, $headers)) 
		{		
			echo "<p class='email_msg_success'><span class='email_msg_closebtn'>&times;</span>Wir danken Ihnen bestens für Ihr Interesse und werden uns umgehend mit Ihnen in Verbindung setzten.</p>";
		}
		else {

			echo "<p class='email_msg_error'><span class='email_msg_closebtn'>&times;</span>Beim Versenden der Mail ist ein Fehler aufgetreten!</p>";
		}
	}
}
else {
	echo "<div class='email_msg_error'><span class='email_msg_closebtn'>&times;</span><p>Ein Problem ist aufgetreten! Bitte versuchen Sie es erneut.</p></div>";
}

?>

<script> // ********* Manipulating CSS with jQuery ********** //

	$("#mail-name, #mail-email, #mail-message").removeClass("email_msg_error_input");
	
	var errorEmpty = "<?php echo $errorEmpty; ?>";	
	var errorEmail = "<?php echo $errorEmail; ?>";

	//All input to red
	if (errorEmpty == true) {
		$("#mail-name, #mail-email, #mail-message").addClass("email_msg_error_input");
	}
	//Email input to red
	if (errorEmail == true) {
		$("#mail-email").addClass("email_msg_error_input");
	}
	//Clearing the inputs
	if (errorEmpty == false && errorEmail == false) {
		$("#mail-name, #mail-email, #mail-message").val("");

	}

	// closing the Message
	$(".email_msg_closebtn").click(function() {
		this.parentElement.style.display='none';
	});

</script>