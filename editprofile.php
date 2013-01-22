 <? 
    include("include/common.php"); 

    if(!$loggedin){ 
        ob_start(); 
        header("Location: login.php"); 
    } 
    include("include/header.php"); 
    include("include/accmenu.php"); 

    if($submit){ 
        $sql = "update Users set 
            password='$spassword', 
            first_name='$sfirst_name', 
            last_name='$slast_name', 
            street='$sstreet', 
            number='$snumber', 
            zip='$szip', 
            city='$scity',  WHERE uid='$myuid'"; 
        mysql_query($sql) or die( mysql_error()."<br>$sql" ); 
?> 
