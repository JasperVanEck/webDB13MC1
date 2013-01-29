<?php
session_start();
echo '<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN"
    "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html>
        <head>
                <title>MyBijou Sieraden</title>
                        <link rel="stylesheet" type="text/css" href="style.css"/>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        </head>

<body>';
if(isset($_SESSION["myuid"]))
{
	echo '  <div id="header">
	                        <a href="index.php"><img src="logo.png" alt="Jewelshop" id="logo"/></a>
	        </div>

	        <div id="headermenu">
	            <a href="contact.php">CONTACT -</a>  <a href="profile.php">MY ACCOUNT -</a> <a href="logout.php">LOGOUT -</a>
	                <a href="mybag.php" id="mybag">MY BAG<img src="mybag.png" alt=""/></a>
	        </div>';
}else
{
	echo '  <div id="header">
	                        <a href="index.php"><img src="logo.png" alt="Jewelshop" id="logo"/></a>
        	</div>

	        <div id="headermenu">
				<a href="contact.php">CONTACT</a> | <a href="login.php">MY ACCOUNT</a> | <a href="register.php">REGISTER</a>
				<a href="mybag.php" id="mybag">MY BAG<img src="mybag.png"></a>
	        </div>';
}
?>
