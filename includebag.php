<?php

include 'dbconnection.php';

echo "<div id='main'>";
$totalprice = null;

try {
	//Connect to Databse
	$dbh = connect();

    	$user_id = 2;//$_SESSION["myuid"];

	$sql = "SELECT Product_id, Amount FROM Content WHERE User_id = $user_id AND Ordered_bool=0";
	$product_id = $dbh->query($sql);
	echo "<table id='includebag'>";

	echo "<tr>
                       	<td> <strong> Name <strong> </td></br>
                       	<td> <strong> Price <strong></td></br>
                       	<td> <strong> Size <strong></td></br>
                       	<td> <strong> Color <strong></td></br>
                       	<td> <strong> Amount <strong></td></br>
			<td> <strong> Subtotal <strong></td></br>
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
			<td> $name </td></br>
			<td> &#8364 $price </td></br>
			<td> $size </td></br>
			<td> $color </td></br>
			<td> $amount </td></br>
			<td> &#8364 $subtotal </td></br>
		</tr>";
	
	}

	echo "</table>"; 
       	echo "<table id='totalprice'>";
      	echo "<tr><td><strong> TOTAL PRICE: &#8364 $totalprice <strong></td>";
   	echo '<td><form action="#payment_url" method="post">
                               	<input type="submit" value="PAY" class="paybagbutton"$
              </form></td></tr>
       	';
	echo "</table>";

	
	$dbh = null;
}
catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
}
echo "</div>";
?>
