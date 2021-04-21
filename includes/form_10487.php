<?php	
	if (empty($_POST['name_13957_10487']) && strlen($_POST['name_13957_10487']) == 0 || empty($_POST['email_13957_10487']) && strlen($_POST['email_13957_10487']) == 0 || empty($_POST['message_13957_10487']) && strlen($_POST['message_13957_10487']) == 0)
	{
		return false;
	}
	
	$name_13957_10487 = $_POST['name_13957_10487'];
	$email_13957_10487 = $_POST['email_13957_10487'];
	$message_13957_10487 = $_POST['message_13957_10487'];
	
	$to = 'thecansone@outlook.it'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Website Message";
	$email_body = "Greetings!  \n\n".
				  "Name_13957_10487: $name_13957_10487 \nEmail_13957_10487: $email_13957_10487 \nMessage_13957_10487: $message_13957_10487 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_13957_10487";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>