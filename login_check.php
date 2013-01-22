<?php
$host = "";
$dbname = "webdb13MC1";
$user = "webdb13MC1";
$pass = "renunaca";
$myusername=$_POST['myemail']; 
$mypassword=$_POST['mypassword']; 
try {
    	$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF-8", $user, $pass);

	$sql = "SELECT * FROM Users WHERE username='$myusername' and password='$myemail'";
	$result = $dbh->query($sql);
	$count = $result->rowCount();

	if($count == 1)
	{
	session_register('myemail')
	session_register('mypassword')
	header("location:login_succes.php")
	}else{
	echo "Wrong Email or Password";
	}
}catch(PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
}

	ob_end_flush();
	?> 
    	

   