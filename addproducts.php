<?php
include 'dbconnection.php';
session_start();
if(isset($_SESSION["admin"]) && $_SESSION["admin"] == 1)
{
	$name = $_POST["prodname"];
       	$price = $_POST["prodprice"];
        $size = $_POST["prodsize"];
        $color = $_POST["prodcolor"];
        $metal = $_POST["prodmetal"];
        $amount =  $_POST["prodamount"];
        $descr = $_POST["proddescr"];
        $foto_id = $_POST["prodphoto"];
        $comp = $_POST["prodcomp"];
	$type = $_POST["prodtype"];

	$dbh = connect();
        $sql="INSERT INTO Products (Name,Price,Size,Color,Metal,Amount,Description,Foto_id,Company_id,Type)
        	VALUES(?,?,?,?,?,?,?,?,?,?)";
	$stmt = $dbh->prepare($sql);

	$stmt->bindParam(1, $name, PDO::PARAM_STR);
	$stmt->bindParam(2, $price, PDO::PARAM_STR);
	$stmt->bindParam(3, $size, PDO::PARAM_INT);
	$stmt->bindParam(4, $color, PDO::PARAM_STR);
	$stmt->bindParam(5, $metal, PDO::PARAM_STR);
	$stmt->bindParam(6, $amount, PDO::PARAM_INT);
	$stmt->bindParam(7, $descr, PDO::PARAM_STR);
	$stmt->bindParam(8, $foto_id, PDO::PARAM_STR);
	$stmt->bindParam(9, $comp, PDO::PARAM_INT);
	$stmt->bindParam(10, $type, PDO::PARAM_STR);
	$stmt->execute();
        $dbh = null;
	header('location:product_entry.php');
}else
{
	echo "Adding Failed, not an admin";
}
?>

