<?php
include 'dbconnection.php';
session_start();

$myuid = $_SESSION["myuid"];
$prod_id = $_POST["prod_id"];
$dbh = connect();
$stmt = $dbh->prepare('DELETE FROM Content WHERE User_id=? AND Product_id=? AND Saved=1');

$stmt->bindParam(1, $myuid, PDO::PARAM_INT);
$stmt->bindParam(2, $prod_id, PDO::PARAM_INT);
$stmt->execute();

$dbh = null;

header('location:saved_items.php');
?>
