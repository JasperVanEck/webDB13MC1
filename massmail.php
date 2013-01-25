<?php
include 'dbconnection.php';

$from= 'info@mybijou.nl';//specify here the address that you want email to be sent from

$subject= $_POST['subject'];
$body= $_POST['body'];

// Connection to DBase 
$dbh = connect();
$query = "SELECT * FROM Newsletter";
$result = $dbh->query($query);

foreach($result as $row) {
	$email= $row['email'];

	$msg= "Dear Customer,\n$body";
	mail($to, $subject, $msg, 'From:' . $from);
	echo 'Email sent to: ' . $email. '<br>';
}
$dbh = null;

?>

