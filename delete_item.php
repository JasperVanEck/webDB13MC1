<?php
include 'dbconnection.php';

$product_id = $_POST["prod_id"];
$type = $_POST["type"];

$dbh = connect();
$stmt = $dbh->prepare('DELETE FROM Products WHERE Product_id = ?');

$stmt->bindParam(1, $product_id, PDO::PARAM_INT);
$stmt->execute();

$dbh = null;
$headto = "location:".$type.".php";
header($headto);
?>
