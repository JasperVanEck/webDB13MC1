<?php

include 'dbconnection.php';

echo "<div id='main'>";
$totalprice = null;

try {
<<<<<<< HEAD
	//Connect to Database
=======
	//Connect to Databse
>>>>>>> 6462bfc18c9b4fa1208bfe2909cc9900224593fd
	$dbh = connect();

    	$user_id = 2;//$_SESSION["myuid"];

<<<<<<< HEAD
	$sql = "SELECT Product_id, Amount FROM Content WHERE User_id = $user_id AND Saved=1";
=======
	$sql = "SELECT Product_id, Amount FROM Content WHERE User_id = $user_id AND Saved_bool=1";
>>>>>>> 6462bfc18c9b4fa1208bfe2909cc9900224593fd
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
			<td> $price </td></br>
			<td> $size </td></br>
			<td> $color </td></br>
			<td> $amount </td></br>
			<td> $subtotal </td></br>
		</tr>";
	
	}

	echo "</table>"; 
       	echo "<table id='totalprice'>";
<<<<<<< HEAD
	echo "<tr><td><strong> TOTAL PRICE: &#8364 $totalprice <strong></td>";
=======
      	echo "<tr><td><strong> TOTAL PRICE: $totalprice <strong></td>";
>>>>>>> 6462bfc18c9b4fa1208bfe2909cc9900224593fd
   	echo '<td><form action="#payment_url" method="post">
                               	<input type="submit" value="PAY" class="paybagbutton"$
              </form></td></tr>
       	';
	echo "</table>";

	
	$dbh = null;
}
<<<<<<< HEAD
	catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
=======
catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
>>>>>>> 6462bfc18c9b4fa1208bfe2909cc9900224593fd
}
echo "</div>";
?>
