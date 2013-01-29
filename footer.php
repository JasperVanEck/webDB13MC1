<?php
$onfocus = "if(!this._haschanged){this.value=''};this._haschanged=true;";
echo '

        <script type="text/javascript" src="validation.js"></script>

       	<div id="footer">

               	<form action="submit.php" method="post">
                       	<fieldset id="footer_field">
                               	<input type="text" name="email" id="newsinput" value="Enter your e-mail for our newsletter here." 
                               	onfocus="$onfocus" onblur="validateEmail()"/>
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

</html>';

?>

