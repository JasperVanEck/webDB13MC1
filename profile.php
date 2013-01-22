<?      //Cpassword=Confirmication password & Spassword=SQL password
        {if ($cpassword != $spassword) { 
            echo "<tr align=center><td colspan=2>Password incorrect. Please try again</td></tr>";  
        } 
        echo "</table>"; 
       }else{ 
        //Myuid is de unieke waarde van de user, zo wordt er straks gekoppeld naar een unieke user. Zorgt ervoor dat je makkelijk de info kan ophalen.
        $this->c=mysql_query("select * from Users where uid='$myuid'"); 
        $this->d=mysql_fetch_object($this->c); 
        if(is_object($this->d)) { 
            $cusername = $this->d->username; 
            $cpassword = $this->d->password; 
            $cfirst_name = $this->d->first_name; 
            $clast_name = $this->d->last_name; 
            $cstreet = $this->d->street; 
            $cnumber = $this->d->number; 
            $czip = $this->d->zip; 
            $ccity = $this->d->city; 
            
        } 
?> 
        <h3>Edit your Account Details</h3> 
        <form method=post> 
        <?=$table2?> 
        <tr align=center> 
            <td colspan=2>Edit your account details and then click the submit button below.<p></td> 
        </tr> 
        <tr> 
            <td align=right>Username:</td> 
            <td><?=$cusername?></td></tr> 
        <tr> 
            <td align=right>Password:</td> 
            <td><input type=text name=spassword size=35 maxlength=15 value='<?=$cpassword?>'></td></tr> 
        <tr> 
            <td align=right>First Name:</td> 
            <td><input type=text name=sfirst_name size=35 maxlength=20 value='<?=$cfirst_name?>'></td></tr> 
        <tr> 
            <td align=right>Last Name:</td> 
            <td><input type=text name=slast_name size=35 maxlength=30 value='<?=$clast_name?>'></td></tr> 
        <tr> 
            <td align=right>Street:</td> 
            <td><input type=text name=sstreet size=35 maxlength=50 value='<?=$cstreet?>'></td></tr> 
        <tr> 
            <td align=right>Number:</td> 
            <td><input type=text name=scity size=35 maxlength=30 value='<?=$cnumber?>'></td></tr> 
        <tr> 
            <td align=right>Zip Code:</td> 
            <td><input type=text name=sstate size=35 maxlength=30 value='<?=$czip?>'></td></tr> 
        <tr> 
            <td align=right>City:</td> 
            <td><input type=text name=szip size=35 maxlength=10 value='<?=$ccity?>'></td></tr> 
        <tr> 
            <td colspan=2> 
                <input type=submit name=submit value='Submit Changes'> 
            </td> 
        </tr> 
        </table> 
        </form> 