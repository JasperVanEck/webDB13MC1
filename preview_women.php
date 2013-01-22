<?php
include 'dbconnection.php';

//Connect to Databse
$dbh = connect();
//Execute query
$sql = "SELECT * FROM Products WHERE Type='women'";
$result = $dbh->query($sql);
$count = 0;
//Create the table for the products to be shown in.
echo "<div id='main'>
	<table id='tablePreview'>";
foreach($result as $row)
{
	//Creae a new row every four items
	if($count % 4 == 0)
	{
		echo "<tr>";
	}
	$prod_id = $row['Product_id'];
	$name = $row['Name'];
	$foto_id = $row['Foto_id'];
	$price = $row['Price'];
	$size = $row['Size'];
	$color = $row['Color'];
	$metal = $row['Metal'];
	$amount = $row['Amount'];
	$description = $row['Description'];
	//Fill in the table
	echo "<td> <div>
      			<img src='$foto_id' alt='$name' class='preview'>
			</div>
			Name: $name <br />
			Price: $price <br />
			Size: $size <br />
			Color: $color <br />
			Metal: $metal <br />
			Amount: $amount <br />
			Description: $description
			<form action='#buy_item_url' method='post'>
				<input type='text' name='amount' value='0'>
				<input type='hidden' name='prod_id' value ='$prod_id'>
				<input type='sumbit' value='ADD TO BAG' class='buttonBag'>
			</form>
		</td>";
	//Close the row after every four items
	if(($count % 4 == 0) && ($count != 0))
	{
		echo "</tr>";
	}
	$count++;
}
//Close the row, if there were less than four items on a row
if($count % 4 != 0)
{
	echo "</tr>";
}
echo "</table>
	</div>";
//Disconnect
$dbh = null;

?>
