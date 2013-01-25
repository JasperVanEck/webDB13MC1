<?php
include 'dbconnection.php';
session_start();
$email = $_POST["semail"];
$password = $_POST["spassword"];
$firstname = $_POST["sfirst_name"];
$lastname = $_POST["slast_name"];
$street = $_POST["sstreet"];
$houseno = $_POST["shouseno"];
$zip = $_POST["szip"];
$city = $_POST["scity"];
$accountnum = $_POST["saccountnum"];
$myuid = $_SESSION["myuid"];

$dbh = connect();
$sql = "UPDATE Users SET Email=?, Password=?, FirstName=?, LastName=?, 
	StreetName=?, HouseNo=?, ZipCode=?, City=?, AccountNumber=? WHERE User_id = ?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $email,PDO::PARAM_STR);
$stmt->bindParam(2, $password,PDO::PARAM_STR);
$stmt->bindParam(3, $firstname,PDO::PARAM_STR);
$stmt->bindParam(4, $lastname,PDO::PARAM_STR);
$stmt->bindParam(5, $street,PDO::PARAM_STR);
$stmt->bindParam(6, $houseno,PDO::PARAM_STR);
$stmt->bindParam(7, $zip,PDO::PARAM_STR);
$stmt->bindParam(8, $city,PDO::PARAM_STR);
$stmt->bindParam(9, $accountnum,PDO::PARAM_INT);
$stmt->bindParam(10, $myuid,PDO::PARAM_INT);
$stmt->execute();

header('location:profile_old.php');
?>
