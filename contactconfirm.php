<?php
$name = $_POST ['name']; 
$email = $_POST ['e-mail']; 
$telephone = $_POST ['telephone']; 
$subject = $_POST ['subject']; 
$comment = $_POST ['comment'];

$sendto = $email; 
$subject = "email confirmation"; 
$message = "Thank you for contacting MyBijou. 
We have received your email and our customer service team will be responding to you soon."; 
$header = "from: [email]Atossa91@gmail.com[/email]\r\n"; //Beheerder email

	mail ($sendto, $subject, $message, $header); 

$sendto = "[email]Atossa91@gmail.com[email]"; 
$subject = "email confirmation customer"; 
$message = "$comment."; 
$header = "from: $email"; 

	mail ($sendto, $subject, $message, $header); 

header('location:index.php');

?> 	