<?php
include 'dbconnection.php';

if(ISSET($_POST['ship']))
{
       	foreach($_POST['orders'] as $order)
       	{
              	if(ISSET($order))
               	{
			$dbh = connect();
                       	$date = date('Y-m-d');
			$sql = "UPDATE Ordered SET Shipped_bool=1, DateShipped=? WHERE Order_id = ? ";
                       	$stmt = $dbh->prepare($sql);
			$stmt->bindParam(1, $date, PDO::PARAM_INT);
			$stmt->bindParam(2, $order, PDO::PARAM_INT);
			$stmt->execute();
               	}
       	}
}
header('location:ordership.php');

?>
