<?php
include 'dbconnection.php';
session_start();

$amount=$_POST["amount"];
$product_id = $_POST["prod_id"];
$myuid = $_SESSION["myuid"];
$type = $_POST["type"];

$dbh = connect();
$stmt = $dbh->prepare('INSERT INTO Content (User_id, Product_id, Amount) VALUES(?,?,?)');

$stmt->bindParam(1, $myuid, PDO::PARAM_INT);
$stmt->bindParam(2, $product_id, PDO::PARAM_INT);
$stmt->bindParam(3, $amount, PDO::PARAM_INT);
$stmt->execute();

$dbh = null;
$headto = "location:".$type.".php";
header($headto);


?>
