<?php

$user = "webdb13MC1"; 
$password = "renunaca"; 
$host = "webdb.science.uva.nl"; 
$dbase = "database_name"; 
$table = "Newsletter"; 

$from= 'info@mybijou.nl';//specify here the address that you want email to be sent from

$subject= $_POST['subject'];
$body= $_POST['body'];

// Connection to DBase 
$dbc= mysqli_connect($host,$user,$password, $dbase) 
or die("Unable to select database");

$query= "SELECT * FROM $table";
$result= mysqli_query ($dbc, $query) 
or die ('Error querying database.');

while ($row = mysqli_fetch_array($result)) {
$first_name= $row['first_name'];
$last_name= $row['last_name'];
$email= $row['email'];

$msg= "Dear $first_name $last_name,\n$body";
mail($to, $subject, $msg, 'From:' . $from);
echo 'Email sent to: ' . $email. '<br>';
}

mysqli_close($dbc);
?>

