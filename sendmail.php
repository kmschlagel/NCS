<?php
$name = $_POST['name'];


$to = 'northfieldcabinet@gmail.com';
$subject = 'New Client';

$message = "Name: $name\n";
$message .= 'Phone Number: ' . $_POST['phone'] . "\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= 'Message:' . $_POST['comments'] . "\n";
$message .= 'Client: ' . $_POST['client'] . "\n";
$message .= "\n";


$headers =	'From: <' . $_POST['email'] . '> '. $name ."\r\n" .
			'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
			'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('location: http://www.northfieldcabinetshop.com/thankyou.html');
?>