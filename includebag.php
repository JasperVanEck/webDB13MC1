<?php
if(isset($_SESSION["myuid"]))
{
	include 'dbconnection.php';

	echo "<div id='main'>";
	$totalprice = null;

	try {
		//Connect to Databse
		$dbh = connect();
	
	    	$user_id = $_SESSION["myuid"];
	
		$sql = "SELECT Product_id, Amount FROM Content WHERE User_id = $user_id AND Ordered_bool=0";
		$product_id = $dbh->query($sql);
		echo "	<h2>My Bag</h2>
				<table id='includebag'>";
	
		echo "<tr>
                       	<td> <h3> Name </h3> </td>
                       	<td> <h3> Price </h3></td>
                       	<td> <h3> Size </h3></td>
                       	<td> <h3> Color </h3></td>
                       	<td> <h3> Amount </h3></td>
			<td> <h3> Subtotal </h3></td>
	               </tr>";

		foreach($product_id as $row)
		{
			$prod_id = $row["Product_id"];
			$amount = $row["Amount"];
			$sql = "SELECT * FROM Products WHERE Product_id=$prod_id";
			$product_result = $dbh->query($sql);	
			$name = null;
			$price = null;
			$size = null;
			$color = null;
		
			foreach($product_result as $i)	
			{
				$name = $i["Name"];
				$price = $i["Price"];
				$size = $i["Size"];
				$color = $i["Color"];
			}
			$subtotal = $price * $amount;
			$totalprice += $price * $amount;
			echo "<tr>
				<td> $name </td>
				<td> &#8364 $price </td>
				<td> $size </td>
				<td> $color </td>
				<td> $amount </td>
				<td> &#8364 $subtotal </td>
			</tr>";	
		}

		echo "</table>"; 
	       	echo "<table class='totalprice'>";
	      	echo "<tr><td><h3> Total Price: &#8364 $totalprice </h3></td>";
	   	echo '<td><form action="complete_order.php" method="post">
                               	<input type="submit" value="PAY" class="paybagbutton"$
	              </form></td></tr>';
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
