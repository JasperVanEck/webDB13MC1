<?php
//Verander old_profile.php naar logischere naam

include 'dbconnection.php';

//Connect to Databse
$dbh = connect();


if(ISSET($_POST['submit']))
{
	foreach($_POST['orders'] as $order)
	{
		if(ISSET($order))
		{
			UPDATE Ordered SET Shipped_bool = 1 WHERE ???

			// ????
		}
	}
}
$sql = "SELECT Ordered.Order_id, Ordered.DateOrdered, Ordered.DateShipped, Content.Product_id, Content.Amount FROM Ordered, Content WHERE Ordered.Order_id = Content.Order_id";
$result = $db->query($sql);	
echo "
		<h2>Previous Orders</h2><br>
		<table id='orderhistory'>
		<tr><td></td>
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
if($row['shipped_bool'] == false)
{
echo "
		<tr> 
		<td><input type='checkbox' name='orders[]' value='$orderno' /></td>
		<td>$orderno</td>
		<td>$dateordered</td>
		<td>$dateshipped</td>
		<td><a href='orderdetails.php'>Details</a></td>
		</tr>
  ";
}
}
echo "
		</table>
		<input type='submit' name='submit' value='SUBMIT' />
		</form>
	";
//Disconnect
$dbh = null;
?>