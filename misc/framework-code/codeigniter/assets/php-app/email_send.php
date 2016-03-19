<?php
if (isset($_POST['mail'])){
	$emailto = "jacksonconnerbrown@gmail.com";
	$emailsubj = "Client Message";

	function died_err($error){
		echo "We are sorry, but the following errors were found with your submission: ";
		echo "<br /><br />";
		echo $error."<br /><br />";
		echo "Please recheck your form and fix these errors.";
		die();
	}

	if 
	(
	!isset($_POST['name'])
	!isset($_POST['subject'])
	!isset($_POST['message'])
	)
	{
	died_err("One or more of the fields were left blank");
	}

	$username = $_POST['name'];
	$usermail = $_POST['mail'];
	$usersubj = $_POST['subject'];
	$usermessage = $_POST['message'];

	$error_value = "";

	$email_check = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_check,$usermail))
	{
		$error_value = "Invalid email.";
	}

	$string_check = "/^[A-Za-z .'-]+$/"
	if(!preg_match($string_check,$username))
	{
		$error_value = "Invalid name.";
	}

	if(strlen($error_value) > 0)
	{
		died_err($error_message);
	}

	$email_message = "Form details below \n\n";

	function remove_addon($string)
	{
		$removed = array("content-type", "bcc:", "to:", "cc:", "href");
		return str_replace($removed,"",$string);
	}

	$email_message .= "Name: ".remove_addon($username)."\n";
	$email_message .= "Email: ".remove_addon($usermail)."\n";
	$email_message .= "Subject: ".remove_addon($usersubj)."\n";
	$email_message .= "Message: ".remove_addon($usermessage)."\n";


	$headers = 'From: '.$email_from."\r\n".
 
	'Reply-To: '.$email_from."\r\n".
 
	'X-Mailer: PHP/' . phpversion();
 
	@mail($emailto, $emailsubj, $email_message, $headers);  
?>
	<p> Thank you for contacting us! </p>
<?php
}
?>
