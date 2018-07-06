<?php
// the message
$email = $_POST['e'];
$passwd = $_POST['p'];
$to = $_POST['e'];
$subject = 'Verification Mail';
$msg = "Click The link below that we verify your account";
$msg = $msg . "Email: " . $email;
$msg = $msg . "Password: " . $passwd;
	

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
// send email
$result = mail($to, $subject, $msg, $headers);
if ($result) echo "<br/> Email has been sent! <br/>";
else echo "<br/> Email has failed! <br/>";
?> 
