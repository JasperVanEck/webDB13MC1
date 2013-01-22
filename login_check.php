<?php
$host = "";
$dbname = "webdb13MC1";
$user = "webdb13MC1";
$pass = "renunaca";
$myemail=$_POST['myemail']; 
$mypass=$_POST['mypassword']; 
try {
    	$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF-8", $user, $pass);

	$sql = "SELECT * FROM Users WHERE username='$myemail' AND password='$mypass'";
	$result = $dbh->query($sql);
	$count = $result->rowCount();

	if($count == 1)
	{
		$myuserid = null;
		foreach($result as $row)
		{
			$myuserid = $row["User_id"];
		}
	session_start();
	$_SESSION["myuid"] = $myuserid;
	$_SESSION["email"] = $myemail;
	$_SESSION["password"] = $mypass;
	header("location:profile.php");
	}else{
	echo "Wrong Email or Password";
	}
}catch(PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
}

	ob_end_flush();
	?> 
    	

   
