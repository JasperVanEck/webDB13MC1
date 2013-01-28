<?php
	include 'header.php';
	include 'menu.php';
	if(isset($_SESSION["admin"]) && $_SESSION["admin"])
	{
		echo '<div id="main">
			<form action="addproducts.php" method="post">
			<h1>Welcome to the admin product page!</h1>
			Add new products here<br>
			<table>
			<tr>
			    <td>Name :</td><td><input name="prodname" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Price :</td><td><input name="prodprice" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Size :</td><td><input name="prodsize" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Color :</td><td><input name="prodcolor" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Metal :</td><td><input name="prodmetal" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Amount :</td><td><input name="prodamount" type="number" size="20"></input></td>
			</tr>
			<tr>
			    <td>Description :</td><td><input name="proddescr" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Photo Upload :</td><td><input name="prodphoto" type="text" size="20"></input></td>
			</tr>
			<tr>
			    <td>Company id :</td><td><input name="prodcomp" type="text" size="20"></input></td>    
			</tr>
			<tr>
			    <td>Type:</td><td><input name="prodtype" type="text" size="20"></input></td>
			</tr>
		</table>
			 <input type="submit" value="confirm"></input>
		</form>
		</div>'; 
	}else
	{
		header('location:index.php');
	}
	include 'footer.php';
?>
