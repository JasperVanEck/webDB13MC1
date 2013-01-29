<?php
include 'dbconnection.php';
session_start();

$product_id = $_POST["prod_id"];
$myuid = $_SESSION["myuid"];
$type = $_POST["type"];

$dbh = connect();
$stmt = $dbh->prepare('INSERT INTO Content (User_id, Product_id, Saved) VALUES( ? , ? , ? )');

$product_id = intval($product_id);
$stmt->bindValue(1, $myuid, PDO::PARAM_INT);
$stmt->bindValue(2, $product_id, PDO::PARAM_INT);
$stmt->bindValue(3, 1, PDO::PARAM_INT);
$stmt->execute();

$dbh = null;
$headto = "location:".$type.".php";
header($headto);

?>

