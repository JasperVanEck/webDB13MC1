<?php
include 'dbconnection.php';
session_start();

$product_id = $_POST["prod_id"];
$myuid = $_SESSION["myuid"];
$type = $_POST["type"];

$dbh = connect();
$stmt = $dbh->prepare('SELECT * FROM Content WHERE User_id=? AND Product_id=?');
$stmt->bindParam(1, $myuid, PDO::PARAM_INT);
$stmt->bindParam(2, $product_id, PDO::PARAM_INT);
$stmt->execute();

if(!($stmt->rowCount() == 1))
{
	$stmt1 = $dbh->prepare('INSERT INTO Content (User_id, Product_id, Saved) VALUES( ? , ? , ? )');

	$product_id = intval($product_id);
	$stmt1->bindValue(1, $myuid, PDO::PARAM_INT);
	$stmt1->bindValue(2, $product_id, PDO::PARAM_INT);
	$stmt1->bindValue(3, 1, PDO::PARAM_INT);
	$stmt1->execute();
}

$dbh = null;
$headto = "location:".$type.".php";
header($headto);

?>

