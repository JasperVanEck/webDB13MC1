<?php
function connect()
{
	$dbconf = simplexml_load_file("../../pdo_config_db.xml");
       	try {
               	if($dbconf === FALSE)
		{
			die("Error pasing XML");
		}
		//Connect to Databse
               	$dbh = new PDO("mysql:host=$dbconf->mysql_host;dbname=$dbconf->mysql_username;charset=UTF-8",
                  "$dbconf->mysql_username", "$dbconf->mysql_password");
		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       	}catch(PDOException $e) {
               	print "Error!: " . $e->getMessage() . "<br/>";
               	die();
       	}
       	return $dbh;
}
?>

