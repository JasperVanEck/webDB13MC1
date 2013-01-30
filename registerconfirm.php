<?php
include 'dbconnection.php';
$first_name = $_POST["firstname"]; 
$last_name = $_POST["lastname"]; 
$email = $_POST["emailAdress"]; 
$password = $_POST["password"];
$cpassword = $_POST["passwordConfirm"];

if($password === $cpassword)
{
	$dbh = connect();

	$sql = "INSERT INTO Users (Email, Password, FirstName, LastName, Admin) VALUES(?, ?, ?, ?, 0)";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(1, $email, PDO::PARAM_STR);
       	$stmt->bindParam(2, $password, PDO::PARAM_STR);
	$stmt->bindParam(3, $first_name, PDO::PARAM_STR);
	$stmt->bindParam(4, $last_name, PDO::PARAM_STR);
	$stmt->execute();
	$sql = "SELECT * FROM Users WHERE Email=? AND FirstName=? AND LastName=? AND Password=?";
	$stmt1 = $dbh->prepare($sql);
       	$stmt1->bindParam(1, $email, PDO::PARAM_STR);
       	$stmt1->bindParam(2, $first_name, PDO::PARAM_STR);
       	$stmt1->bindParam(3, $last_name, PDO::PARAM_STR);
       	$stmt1->bindParam(4, $password, PDO::PARAM_STR);
	$stmt1->execute();

	$count = $stmt1->rowCount();
	echo $count;
	if($count == 1)
	{
		$sendto = $email; 
		$subject = "email confirmation"; 
		$message = "the body of the email - Dear customer, this email is to confirm your registration"; 
		$header = "from: [email]Atossa91@gmail.com[/email]\r\n"; 

		mail ($sendto, $subject, $message, $header); 
		header('location:login.php');
	}else{ 
		echo "An error has occured, please email";
		header('location:contact.php');
	}
}else
{
	echo "registration failed";
}

?> 



