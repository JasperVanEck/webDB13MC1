<?php
include 'dbconnection.php';
$myemail=$_POST['myemail']; 
$mypass=$_POST['mypassword']; 
try {
    	$dbh = connect();

	$sql = "SELECT * FROM Users WHERE Email=? AND Password=?";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(1, $myemail, PDO::PARAM_STR);
	$stmt->bindParam(2, $mypass, PDO::PARAM_STR);
	$stmt->execute();
	$count = $stmt->rowCount();

	if($count == 1)
	{
		session_start();
		$myuserid = null;
		$myadmin = 0;
		foreach($stmt as $row)
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
?> 
    	

   
