<?php
	include 'header.php';
	include 'menu.php';
	echo ' 
	<div id="main">
        <form action="#contact_url" method="post" id="form"> 
        <h2>Contact Information</h2> 
            <fieldset class="login_register">
                 <label for="name" class="form">Name:</label> 
                 <input type="text" name="name" id="contact_name" />
                 <label for="email" class="form">E-mail:</label> 
                 <input type="text" name="email" id="contact_email" />
                 <label for="telephone" class="form">Telephone:</label> 
                 <input type="text" name="telephone" id="contact_telephone" />
                 <label for="subject" class="form">Subject:</label> 
                 <input type="text" name="subject" id="contact_subject" />
                 <label for="comment" class="form">Comment:</label> 
                     <input type="text" name="comment" id="contact_comment" />
                     <input type="submit" value="SUBMIT" class="button" />
            </fieldset> 
        </form>
    </div>

    <div id="contact_information">
		<table id="contact">
			<tr>
				<td><b>COMPANY ADDRESS<br/><br/></b></td>
				<td><b>POST RETURN ADDRESS</b><br/><br/></td>
				<td><b>PR AGENCY</b><br/><br/></td>
			</tr>
            <tr>
                 <td>MYBIJOU.NL<br/><br/></td>
                 <td>MYBIJOU.NL<br/><br/></td>
                 <td>Mouse PR<br/><br/></td>
            </tr>
             <tr>
                 <td>Huidenstraat 6<br/><br/></td>
                 <td>PO Box 43596<br/><br/></td>
                 <td>Keizersgracht 22<br/><br/></td>
             </tr>
             <tr>
                 <td>1016 ES Amsterdam<br/><br/></td>
                 <td>1016 ES Amsterdam<br/><br/></td>
                 <td>1015 CR Amsterdam<br/><br/></td>
             </tr>
             <tr>
                 <td>The Netherlands<br/><br/></td>
                 <td>The Netherlands<br/><br/></td>
                 <td>The Netherlands<br/><br/></td>
             </tr>
             <tr>
				 <td>info@MyBijou.nl<br/><br/></td>
				 <td>www.Mousepr.nl<br/><br/></td>
 			</tr>
			 <tr>
				 <td>+31(0)20 9857343<br/><br/></td>
				 <td>+31(0)20 8635421<br/><br/></td>
			 </tr>
 		</table>
	</div> 
	';

	include 'footer.php';

?>
