<?php
include 'dbconnection.php';
$myemail=$_POST['myemail']; 
$mypass=$_POST['mypassword']; 
try {
    	$dbh = connect();

	$sql = "SELECT * FROM Users WHERE users";
	$result = $dbh->query($sql);
	$count = $result->rowCount();

	echo "<h2>Details</h2><br>";
foreach($result as $row)
{
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$email = $row['e-mail'];
	$password = $row['password'];
	$confirmpassword = $row['confirmpassword'];
}
	echo 
		"	
			$firstname $lastname <br />
			$email <br />
			$password <br />
			$confirmpassword <br /><br />
		";

$button = $_POST ['button']; 

if ($button)
{
	$first_name = $_POST ['firstname']; 
	$last_name = $_POST ['lastname']; 
	$email = $_POST ['e-mail']; 
	$password = $_POST ['password'];
	$confirmpassword = $_POST ['confirmpassword']; 
 
 	if ($firstname && $lastname &&email &&password && $confirmpassword)
 {

 		if ($password == $confirmpassword)
 {
 		if (strstr ($email, "@" ) && strstr ($email, "."))
 {
 		else
 			echo "Not a valid email"; 
 	
 	else 
 		echo "that username is taken"
 	else 
 		echo "passwords did not match"; 
}

	if ($firstname && $lastname &&email &&password && $confirmpassword)
		if ($password = $confirmpassword)

		if ($send_registerinformation){
		echo "We've recived your register information"; 
		}
		else {
		echo "ERROR";
		}
		?> 



