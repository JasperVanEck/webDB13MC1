<?php
include 'dbconnection.php';

if(isset($_SESSION["myuid"]))
{
	echo "<div id='main'>";
	$totalprice = null;

	try {
		//Connect to Database
		$dbh = connect();

	    	$user_id = $_SESSION["myuid"];

		$sql = "SELECT Products.Product_id, Products.Price, Products.Name, Products.Size, 
		Products.Color, Products.Stock, Products.Foto_id FROM Content, Products
			WHERE User_id = $user_id AND Saved=1 AND Content.Product_id=Products.Product_id";
		$product_id = $dbh->query($sql);
	
		echo "<table id='includebag'>";

		echo "<tr>	
			<td></td>
                       	<td> <strong> Name <strong> </td>
                       	<td> <strong> Price <strong></td>
                       	<td> <strong> Size <strong></td>
                       	<td> <strong> Color <strong></td>
                       	<td> <strong> Stock <strong></td>
			<td></td>
	               </tr>";

		foreach($product_id as $row)
		{
			$prod_id = $row["Product_id"];
			$amount = $row["Stock"];
			$name = $row["Name"];
			$price = $row["Price"];
			$size = $row["Size"];
			$color = $row["Color"];
			$foto_id = $row["Foto_id"];
			echo "<td><div>
	      			<img src='$foto_id' alt='$name' class='preview'>
				</div></td></br>
				<td> $name </td></br>
				<td> $price </td></br>
				<td> $size </td></br>
				<td> $color </td></br>
				<td> $amount </td></br>";
			echo "<td><form action='delete_saved.php' method='post'>
				<input type='hidden' name='prod_id' value='$prod_id'>
                               	<input name='delete' type='submit' id='delete' value='Delete'>
		              </form></td>";
			echo "<form action='add_to_bag.php' method='post'>
				<td><input type='text' name='amount' value='0' class='inputAmount'></td>
				<td><input type='hidden' name='prod_id' value='$prod_id'></td>
                               	<td><input type='hidden' name='type' value='mybag.php'></td>
				<td><input type='submit' value='ADD TO BAG' ></td>
				</form></tr>";
		}	
		echo "</table>"; 
		$dbh = null;
	}catch (PDOException $e) 
	{
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
	echo "</div>";
}else
{
	header('location:login.php');
}
?>
