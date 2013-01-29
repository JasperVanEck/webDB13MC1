<?php
include 'dbconnection.php';
$prod_id = $_POST["prod_id"];
$type = $_POST["type"];
$dbh = connect();

$sql = "UPDATE Products SET Sale=0 WHERE Product_id=?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $prod_id, PDO::PARAM_INT);
$stmt->execute();

$dbh = null;
$headto = "location:".$type.".php";
header($headto);
?>
