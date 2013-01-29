<?php
include 'dbconnection.php';

//Connect to Databse
$dbh = connect();

$orderid = $_GET['orderId'];
$sql = "SELECT Ordered.Order_id, Content.Product_id, Content.Amount, Products.Name, Products.Price, Products.Size, Products.Color, Products.Metal 
FROM Ordered, Content, Products WHERE Ordered.Order_id = ? and Ordered.Order_id = Content.Order_id";

$result = $dbh->prepare($sql);
$result->bindParam(1, $orderid, PDO::PARAM_INT);
$result->execute();
echo	"<table id='orderdetails'>
			<tr>
				<td><h3>Name</h3></td>
				<td><h3>Size</h3></td>
				<td><h3>Color</h3></td>
				<td><h3>Metal</h3></td>
				<td><h3>Quantity</h3></td>
				<td><h3>Price</h3></td>
			</tr>";
$totalprice = 0;
foreach($result as $row)
{
	$productname = $row['Name'];
	$size = $row['Size'];
	$color = $row['Color'];
	$metal = $row['Metal'];
	$quantity = $row['Amount'];
	$price = $row['Price'];
	$totalprice += $price * $quantity;

echo "<tr>
		<td>$productname</td>
		<td>$size</td>
		<td>$color</td>
		<td>$metal</td>
		<td>$quantity</td>
		<td>&#8364 $price</td>
	</tr>";
}

echo "</table>";

echo "<table id='totalprice'>
			<tr>
				<td><h3>TOTAL PRICE: &#8364 $totalprice</h3></td>
			</tr>
			</table>";

//Disconnect
$dbh = null;
?>

<a href="profile.php">BACK</a>
