<?php

$con = mysql_connect("webdb.science.uva.nl","webdb13MC1","renunaca") or die('Could not connect: ' . mysql_error());

mysql_select_db("Newsletter", $con);

if(mysql_query("INSERT INTO Newsletter (id, email) VALUES (0, ".$_POST['email']."')")) {

echo "Your email has been added to our list!";

} else {

echo "There was an error adding your email to our list. Please try again.";

}

mysql_close($con);

?>


