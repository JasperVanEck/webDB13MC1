<?php
include 'dbconnection.php';
$first_name = $_POST ['firstname']; 
$last_name = $_POST ['lastname']; 
$email = $_POST ['e-mail']; 
$password = $_POST ['password'];

$dbh = connect();

$sql = "INSERT INTO Users (Email, FirstName, LastName, Password) 
		VALUES('$email', '$first_name', '$last_name', '$password')";
$result = $dbh->query($sql);

$sql = "SELECT * FROM Users WHERE Email='$email' AND FirstName='$first_name' 
		AND LastName='$last_name' AND Password='$password'";
$result = $dbh->query($sql);

$count = $result->rowCount();

if($count == 1)
{
$sendto = $email; 
$subject = "email confirmation"; 
<<<<<<< HEAD
$message = "the body of the email - this email is to confirm your registration"
=======
$message = "the body of the email - Dear customer, this email is to confirm your registration"; 
>>>>>>> 646afdf1c86e475c20f29b54a408b4c1c6a6fda6
$header = "from: [email]Atossa91@gmail.com[/email]\r\n"; 

	mail ($sendto, $subject, $message, $header); 

}else{ 
	echo "An error has occured, please email"

	header('location:login.php');
}else
{
	echo 'registration failed';
}

?> 



