<?php
include 'dbconnection.php';
session_start();

$amount=$_POST["amount"];
$product_id = $_POST["prod_id"];
$myuid = $_SESSION["myuid"];
$type = $_POST["type"];

$dbh = connect();

$stmt = $dbh->prepare('SELECT * FROM Content WHERE User_id=? AND Product_id=?');
$stmt->bindParam(1, $myuid, PDO::PARAM_INT);
$stmt->bindParam(2, $product_id, PDO::PARAM_INT);
$stmt->execute();

if($stmt->rowCount() == 1)
{
	foreach($stmt as $row)
	{
		if($row["Saved"] == 1)
		{
			$stmt = $dbh->prepare('UPDATE Content SET Saved=0, Amount=? WHERE User_id=? AND Product_id=?');
			$stmt->bindParam(1, $amount, PDO::PARAM_INT);
			$stmt->bindParam(2, $myuid, PDO::PARAM_INT);
			$stmt->bindParam(3, $product_id, PDO::PARAM_INT);
			$stmt->execute();
		}else
		{
			$amount += $row["Amount"];
			$stmt = $dbh->prepare('UPDATE Content SET Amount=? WHERE User_id=? AND Product_id=?');
                       	$stmt->bindParam(1, $amount, PDO::PARAM_INT);
                       	$stmt->bindParam(2, $myuid, PDO::PARAM_INT);
                       	$stmt->bindParam(3, $product_id, PDO::PARAM_INT);
                       	$stmt->execute();
		}
	}
}else
{
	$stmt1 = $dbh->prepare('INSERT INTO Content (User_id, Product_id, Amount) VALUES(?,?,?)');

	$stmt1->bindParam(1, $myuid, PDO::PARAM_INT);
	$stmt1->bindParam(2, $product_id, PDO::PARAM_INT);
	$stmt1->bindParam(3, $amount, PDO::PARAM_INT);
	$stmt1->execute();
}
$dbh = null;
$headto = "location:".$type.".php";
header($headto);


?>
