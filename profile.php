<?php
	include 'header.php';
	include 'menu.php';
	//Cpassword=Confirmication password & Spassword=SQL password
	include 'dbconnection.php';
	$dbh = connect();
        //Myuid is de unieke waarde van de user, zo wordt er straks gekoppeld naar een unieke user. Zorgt ervoor dat je makkelijk de info kan ophalen.
	$userid = $_SESSION["myuid"];
        $sql = "SELECT * FROM Users WHERE User_id=$userid";
        $result = $dbh->query($sql);
        foreach($result as $row) {
            $cemail = $row["Email"];
            $cpassword = $row["Password"];
            $cfirst_name = $row["FirstName"];
            $clast_name = $row["LastName"];
            $cstreet = $row["StreetName"];
            $cnumber = $row["HouseNo"];
            $czip = $row["ZipCode"];
            $ccity = $row["City"];
            $caccountnum = $row["AccountNumber"];
        }

 echo "
	<div id='main'>
        <h3>Edit your Account Details</h3>
        <form method=post>
	<table>
        <tr align=center>
            <td colspan=2>Edit your account details and then click the submit button below.<p></td>
        </tr>
        <tr>
            <td align=right>Email:</td>
            <td><input type='text' name='semail' size=35 maxlength=15 value='$cpassword'></td></tr>
        <tr>
            <td align=right>Password:</td>
            <td><input type='password' name='spassword' size=35 maxlength=15 value='$cpassword'></td></tr>
        <tr>
            <td align=right>First Name:</td>
            <td><input type='text' name='sfirst_name' size=35 maxlength=20 value='$cfirst_name'></td></tr>
        <tr>
            <td align=right>Last Name:</td>
            <td><input type='text' name='slast_name' size=35 maxlength=30 value='$clast_name'></td></tr>
        <tr>
            <td align=right>Street:</td>
            <td><input type='text' name='sstreet' size=35 maxlength=50 value='$cstreet'></td></tr>
        <tr>
            <td align=right>Number:</td>
            <td><input type='text' name='scity' size=35 maxlength=30 value='$cnumber'></td></tr>
        <tr>
            <td align=right>Zip Code:</td>
            <td><input type=text name=sstate size=35 maxlength=30 value='$czip'></td></tr>
        <tr>
            <td align=right>City:</td>
            <td><input type='text' name='szip' size=35 maxlength=10 value='$ccity'></td></tr>
	<tr>
		<td align=right>AccountNumber</td>
		<td><input type='text' name='saccountnum' size=35 maxlength=10 value='$caccountnum'></td></tr>
        <tr>
            <td colspan=2>
                <input type='submit' name='submit' value='Submit Changes'>
            </td>
        </tr>
        </table>
        </form>
	</div>";

$dbh = null;
include 'footer.php';
?>
