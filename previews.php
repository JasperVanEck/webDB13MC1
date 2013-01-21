<?php
$host = "";
$dbname = "webdb13MC1";
$user = "webdb13MC1";
$pass = "renunaca";
try {
    	$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF-8", $user, $pass);

	$sql = "SELECT * FROM Products WHERE Type='women'";
	$result = $dbh->query($sql);
	$count = 0;
	echo "<table id='preview'>";
	foreach($result as $row)
	{
		if($count % 4 == 0)
		{
			echo "<tr>";
		}
		$name = $row["Name"];
		$foto_id = $row['Foto_id'];
		$price = $row['Price'];
		$size = $row['Size'];
		$color = $row['Color'];
		$metal = $row['Metal'];
		$amount = $row['Amount'];
		$description = $row['Description'];
		echo "<td> <div> 
       				<img src='$foto_id' alt='$name' class='preview'>
				</div>
				Name: $name <br>
				Price: $price <br>
				Size: $size <br>
				Color: $color <br>
				Metal: $metal <br>
				Amount: $amount <br>
				Description: $description
			</td>";
		if(($count % 4 == 0) && ($count != 0))
		{
			echo "</tr>";
		}
		$count++;
	}
	if($count % 4 != 0)
	{
		echo "</tr>";
	}
	echo "</table>";
	
	$dbh = null; 
} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
}

?>
