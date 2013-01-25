<?php
include 'dbconnection.php';
$myemail=$_POST['myemail']; 
$mypass=$_POST['mypassword']; 
try {
    	$dbh = connect();

	$sql = "SELECT * FROM Users WHERE Email='$myemail' AND Password='$mypass'";
	$result = $dbh->query($sql);
	$count = $result->rowCount();

	if($count == 1)
	{
		session_start();
		$myuserid = null;
		$myadmin = false;
		foreach($result as $row)
		{
			$myuserid = $row["User_id"];
			$myadmin = $row["Admin"];
		}
		$_SESSION["admin"] = $myadmin;
		$_SESSION["myuid"] = $myuserid;
		$_SESSION["email"] = $myemail;
		$_SESSION["password"] = $mypass;
		header("location:profile.php");
	}else
	{
	echo "Wrong Email or Password";
	}
}catch(PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
}

	ob_end_flush();
	?> 
    	

   
