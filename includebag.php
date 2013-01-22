<?php
echo "<div id='main'>";
$host = "";
$dbname = "webdb13MC1";
$user = "webdb13MC1";
$pass = "renunaca";

try {
    	$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF-8", $user, $pass);

	$user_id = 2;

	$sql = "SELECT Product_id FROM Content WHERE User_id = '$user_id' AND Ordered='FALSE'";
	$product_id = $dbh -> query($sql);

	$sql = "SELECT Amount FROM Content WHERE User_id = '$user_id' AND Ordered='FALSE'";
	$amount = $dbh -> query($sql);

	$sql = "SELECT * FROM Products WHERE Product_id='$product_id'";
	$product_result = $dbh ->  query($sql);


	echo "<table id='includebag'>";
	foreach($product_result as $row)
	{
		$name = $row["Name"];
		$price = $row["Price"];
		$size = $row["Size"];
		$color = $row["Color"];
		$amount;

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
