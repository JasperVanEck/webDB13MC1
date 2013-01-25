<?php
if(
           $_GET["prodname"]
        && $_GET["prodprice"]
        && $_GET["prodsize"]
        && $_GET["prodcolor"]
        && $_GET["prodmetal"]
        && $_GET["prodamount"]
        && $_GET["proddescr"]
        && $_GET["prodphoto"]
        && $_GET["prodcomp"])
{
        if($_GET["regpass1"]==$_GET["regpass2"])//Hier moet de line voor de admin login check staan.
        {
        $servername="webdb.science.uva.nl";
        $username="webdb13MC1";
        $password='renunaca';
        $conn=  mysql_connect($servername,$username,$password)or die(mysql_error());
        mysql_select_db("test",$conn);
        $sql="insert into Products (id,name,price,size,color,metal,amount,description,photo_id,company_id)
        values(
            0,
            '$_GET[prodname]',
            '$_GET[prodprice]',
            '$_GET[prodsize]',
            '$_GET[prodcolor]',
            '$_GET[prodmetal]',
            '$_GET[prodamount]',
            '$_GET[proddescr]',
            '$_GET[prodphoto]',
            '$_GET[prodcomp]',
            )";
        $result=mysql_query($sql,$conn);
        print "<h1>Product succesfully added!</h1>";

        print "<a href='index.php'>go to login page</a>";
        }
        else print "passwords doesnt match";
}
else print"invaild data";
?>

