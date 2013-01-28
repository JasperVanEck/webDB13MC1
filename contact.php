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
				<td><b>COMPANY ADDRESS</b></td>
				<td><b>POST RETURN ADDRESS</b></td>
				<td><b>PR AGENCY</b></td>
			</tr>
            <tr>
                 <td>MYBIJOU.NL</td>
                 <td>MYBIJOU.NL</td>
                 <td>Mouse PR</td>
            </tr>
             <tr>
                 <td>Huidenstraat 6</td>
                 <td>PO Box 43596</td>
                 <td>Keizersgracht 22</td>
             </tr>
             <tr>
                 <td>1016 ES Amsterdam</td>
                 <td>1016 ES Amsterdam</td>
                 <td>1015 CR Amsterdam</td>
             </tr>
             <tr>
                 <td>The Netherlands</td>
                 <td>The Netherlands</td>
                 <td>The Netherlands</td>
             </tr>
             <tr>
				 <td>info@MyBijou.nl</td>
				 <td>www.Mousepr.nl</td>
 			</tr>
			 <tr>
				 <td>+31(0)20 9857343</td>
				 <td>+31(0)20 8635421</td>
			 </tr>
 		</table>
	</div> 
	';

	include 'footer.php';

?>
