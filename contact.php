<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$email_from=$email;
$email_subject='New message from client';
$email_body="Name:$name.\n".
             "Email:$email.\n".
             "Subject: $subject.\n".
             "Message: $message.\n";
             


$to="padmavathi.030@gmail.com";
$headers= "From: $email_from\n";
$headers="Reply-to:$email\n";
if (isset($_POST['submit']))
{
	if(mail($to,$email_subject,$email_body,$headers))
	{
		echo "Your mail has been sent successfuly ! Thank you";
	}
	else
	{
		echo "Your mail has not sent successfuly ! Try again";

	}
}

?>

