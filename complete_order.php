<?php
session_start();
include 'dbconnection.php';
$myuid = $_SESSION["myuid"];
try{
$dbh = connect();
$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO Ordered (User_id, DateOrdered) VALUES(?,?)";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1,$myuid, PDO::PARAM_INT);
$stmt->bindParam(2,$date, PDO::PARAM_STR);
$stmt->execute();

$sql = "SELECT * FROM Ordered WHERE DateOrdered=? AND User_id=?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $date, PDO::PARAM_STR);
$stmt->bindParam(2, $myuid, PDO::PARAM_INT);
$stmt->execute();

$order_id = null;
foreach($stmt as $row)
{
	$order_id = $row["Order_id"];
}

$sql = "UPDATE Content SET Ordered_bool=1, Order_id=? WHERE User_id=? AND Ordered_bool=0 AND Saved=0";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1,$order_id, PDO::PARAM_INT);
$stmt->bindParam(2,$myuid, PDO::PARAM_INT);
$stmt->execute();

$sql = "SELECT * FROM Content,Products WHERE Order_id=? AND User_id=? AND Content.Product_id=Products.Product_id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $order_id, PDO::PARAM_INT);
$stmt->bindParam(2, $myuid, PDO::PARAM_INT);
$stmt->execute();
foreach($stmt as $row)
{
	$newstock = $row["Stock"] - $row["Amount"];
	$prod_id = $row["Product_id"];
	$sql = "UPDATE Products SET Stock=? WHERE Product_id=?";
	$stmt = $dbh->prepare($sql);
	$stmt->bindParam(1,$newstock, PDO::PARAM_INT);
	$stmt->bindParam(2,$prod_id, PDO::PARAM_INT);
	$stmt->execute();
}

}catch(PDOException $e)
{
	echo "Error: " . $e->getMessage();
}
header('location:profile.php');
?>
