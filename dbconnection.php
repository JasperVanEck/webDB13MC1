<?php
function connect()
{
       	$host = "";
       	$dbname = "webdb13MC1";
       	$user = "webdb13MC1";
       	$pass = "renunaca";
       	$dbh = null;
       	try {
               	//Connect to Databse
               	$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF-8", $user, $pass);
       	}catch(PDOException $e) {
               	print "Error!: " . $e->getMessage() . "<br/>";
               	die();
       	}
       	return $dbh;
}
?>

