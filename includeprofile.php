<?php
//Verander old_profile.php naar logischere naam
//profile.php veranderen naar myaccount.php ofzo

include 'dbconnection.php';
echo "<div id='main'>";
//Connect to Databse
$dbh = connect();

$userid = $_SESSION['myuid'];
$sql = "SELECT * FROM Users WHERE User_id=$userid";
$result = $dbh->query($sql);
//Create heading title
echo "<h2>Details</h2><br>";
foreach($result as $row)
{
	$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$streetname = $row['StreetName'];
	$houseno = $row['HouseNo'];
	$zipcode = $row['ZipCode'];
	$city = $row['City'];
	$email = $row['Email'];
	
	echo 	"	
			$firstname $lastname <br />
			$streetname $houseno <br />
			$zipcode $city <br />
			$email <br />
			<a href='profile_old.php'>EDIT</a><br />
			<a href='saved_items.php'>Saved Items</a><br />";
	if(isset($_SESSION["admin"]) && $_SESSION["admin"])
	{
		echo "<a href='product_entry.php'>Add Products to site</a><br />";
	}
}

//Execute query for order history
$sql = "SELECT Ordered.Order_id, Ordered.DateOrdered, Ordered.DateShipped, Content.Product_id, Content.Amount FROM Ordered, Content 
	WHERE Ordered.User_id = $userid and Ordered.Order_id = Content.Order_id";
$result = $dbh->query($sql);	
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
			<td><a href='orderdetails.php?orderId=$orderid'>Details</a></td>
			</tr>
		";
}
echo "</table>";
//Disconnect
$dbh = null;

?>

<a href="index.html">CONTINUE SHOPPING</a>
</div>
