<?php      
	include 'header.php';
	include 'menu.php';
	//Cpassword=Confirmication password & Spassword=SQL password
	include 'dbconnection.php';
	$dbh = connect();
        //Myuid is de unieke waarde van de user, zo wordt er straks gekoppeld naar een unieke user. Zorgt ervoor dat je makkelijk de info kan ophalen.
	$userid = $_SESSION["myuid"];
        $sql = "SELECT * FROM Users WHERE User_id=?"; 
        $stmt = $dbh->prepare($sql); 
	$stmt->bindParam(1,$userid,PDO::PARAM_INT);
	$stmt->execute();
        foreach($stmt as $row) { 
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
        <h2>Edit Account Details</h2> 
        <form action='edit_profile.php' method='post' class='form'> 

       
           Edit your account details and then click the submit button below.<br/><br/>
      
         
        Email:<br/>
            <input type='text' name='semail' size=35 maxlength=15 value='$cemail'><br/><br/>
       
       Password:<br/>
           <input type='password' name='spassword' size=35 maxlength=15 value='$cpassword'><br/><br/>
        
           First Name:<br/>
           <input type='text' name='sfirst_name' size=35 maxlength=20 value='$cfirst_name'><br/><br/>

        Last Name:<br/>
          <input type='text' name='slast_name' size=35 maxlength=30 value='$clast_name'> <br/><br/>
       
          Street: <br/>
        <input type='text' name='sstreet' size=35 maxlength=50 value='$cstreet'> <br/><br/>
   
          Number:<br/>
            <input type='text' name='shouseno' size=35 maxlength=30 value='$cnumber'><br/><br/>
       
            Zip Code:<br/>
            <input type='text' name='szip' size=35 maxlength=30 value='$czip'><br/><br/>
      
        City:<br/>
            <input type='text' name='scity' size=35 maxlength=10 value='$ccity'><br/><br/>
	
		Account Number:<br/>
		<input type='text' name='saccountnum' size=35 maxlength=10 value='$caccountnum'><br/><br/>
    
                <input type='submit' name='submit' value='SUBMIT' class='button'> 
          
        
        </form> 
	</div>";

$dbh = null;
include 'footer.php';
?>
