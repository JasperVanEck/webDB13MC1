<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN"
    "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html>	
	<head>
		<title>MyBijou Sieraden</title>
			<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>

<body>

	<div id="header">
			<a href="index.html"><img src="logo.png" alt="Jewelshop" id="logo"/></a>
	</div>

	<div id="headermenu">
            <a href="contact.html">CONTACT -</a>  <a href="login.html">MY ACCOUNT -</a>  <a href="register.html">REGISTER -</a>

		<a href="mybag.html" id="mybag">MY BAG<img src="mybag.jpg" alt=""/></a>
	</div>
	
	<div id="menu">
			<ul id="nav">
				<li><a href="women.html">WOMEN</a></li>
				<li><a href="men.html">MEN</a></li>
				<li><a href="sale.html">SALE</a></li>
			</ul>
	</div>
    <div id="main">
        <form action="#contact_url" method="post" id="form"> 
        <h2>Contact Information</h2> 
            <fieldset class="login_register">
                 <label for="name" class="form">Name:</label> 
                 <input type="text" name="name" id="contact_name" />
                 <label for="login_email" class="form">E-mail:</label> 
                 <input type="text" name="email" id="contact_email" />
                 <label for="Telephone" class="form">Telephone:</label> 
                 <input type="text" name="telephone" id="contact_telephone" />
                 <label for="Comment" class="form">Comment:</label> 
                     <input type="text" name="comment" id="contact_comment" />
                     <input type="submit" value="SUBMIT" class="button" />
            </fieldset> 
        </form>
        </div>

     <div id="contact_information">
		<table border="0" width="525" height="211">
			<tr>
				<td><b>COMPANY ADDRESS</b></td>
				<td><b>POST RETURN ADDRESS<b></td>
				<td><b>PR AGENCY<b></td>
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
				 <td>+31(0)20 9857343<br/td>
				 <td>+31(0)20 8635421<br/td>
			 </tr>
 
 		</table>
	</div> 



	<div id="footer">
		<form action="" method="post">
			<fieldset id="footer_field">
				<input type="text" name="email" id="newsinput" value="Enter your e-mail for our newsletter here." onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;"/>
				<input type="submit" value="SUBSCRIBE" id="newsbutton"/>
			</fieldset>
		</form>

		<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" 
			alt="Valid XHTML 1.0 Strict" height="31" width="88" id="validatebutton1" /></a>

		<a href="http://jigsaw.w3.org/css-validator/check/referer">
		<img style="border:0;width:88px;height:31px"
			src="http://jigsaw.w3.org/css-validator/images/vcss"
			alt="Valid CSS!" id="validatebutton2" />
		</a>
	</div>

</body>

</html>