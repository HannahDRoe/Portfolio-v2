<?php
$to = 'hannah@hannahroe.com';
$subject = 'Website Contact';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<EMAIL

From: $name

E-Mail: $email

Message:

$message

EMAIL;

$header ='From: Portfolio';

if($_POST){
	mail($to, $subject, $body, $header);
	header('Location: thank-you.html');
	exit();
}

?>
