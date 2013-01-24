<?php
//Verander old_profile.php naar logischere naam
//profile.php veranderen naar myaccount.php ofzo

include 'dbconnection.php';

//Connect to Databse
$dbh = connect();

//Execute query for order history
$sql = "SELECT ordered.Order_id, ordered.DateOrdered, ordered.DateShipped, content.Product_id, content.Amount FROM Ordered, Content WHERE Ordered.User_id = $userid and Ordered.Order_id = Content.Order_id";
$result = $db->query($sql);	
//Create heading title and table where history data will be shown
echo "
		<h2>Previous Orders</h2><br>
		<table id='orderhistory'>
		<tr>
		 	<td><h3>Order Number</h3></td>
		 	<td><h3>Order Date</h3></td>
		 	<td><h3>Date Shipped</h3></td>
		 	<td><h3>Details</h3></td>
		</tr>
		";
foreach($result as $row)
{
		$orderno = $row['Order_id'];
		$dateordered = $row['DateOrdered'];
		$dateshipped = $row['DateShipped'];

	//Fill in the table
	echo "
			<tr>
			<td>$orderno</td>
			<td>$dateordered</td>
			<td>$dateshipped</td>
			<td><a href='orderdetails.php'>Details</a></td>
			</tr>
		";
}
echo "</table>";
//Disconnect
$dbh = null;

?>

<a href="index.html">CONTINUE SHOPPING</a>