<?php
include 'dbconnection.php';

//Connect to Databse
$dbh = connect();
//Execute query

if($_POST)['submit'])  {
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['comment'])} {
		$error = true; 

	}else{ 
		echo $email_to = 'jaspergkurtz@gmail.com';}
		
		$name = $_POST['name']; 
		$email = $_POST['e-mail']; 
		$telephone = $_POST['telephone']; 
		$comment = $_POST['comment']; 	

		$messages = "name: $name \r\n Email: $email \r\n Comment: $comment; 
		$headers = "from: . $name;"
		$mailsent =mail($to,$subject,$message,$header);

		if($mailsent) {
			$sent = true; 
		}

?> 


	
	
	






	if (empty ($contact_name)



	} else {



	}
 


}




 $email_to = "you@yourdomain.com";
    $email_subject = "Your email subject line";