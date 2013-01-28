<?php
include 'dbconnection.php';

$dbh = connect();
$email = $_POST["email"];

$sql = "INSERT INTO Newsletter (id, email) VALUES (0, ?)"
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $email, PDO::PARAM_STR);
$stmt->execute();

$dbh = null;
header('location:index.php');

?>


