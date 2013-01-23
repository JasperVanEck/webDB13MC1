<?php
echo "<div id='main'>";
$host = "";
$dbname = "webdb13MC1";
$user = "webdb13MC1";
$pass = "renunaca";

try {
    	$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF-8", $user, $pass);

	$user_id = 2;//$_SESSION["myuid"];

	$sql = "SELECT Product_id, Amount FROM Content WHERE User_id = $user_id AND Ordered_bool=0";
	$product_id = $dbh->query($sql);
	$count = $product_id->rowCount();
	echo $count;
	echo "<table id='includebag'>";
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
		echo "<tr><td>
			Name: $name <br>
			Price: $price <br>
			Size: $size <br>
			Color: $color <br>
			Amount: $amount <br>
		</td><tr>";

	}
	echo "</table>";

	$dbh = null;
}
catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
}
echo "</div>";
?>
