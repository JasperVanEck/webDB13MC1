<?php
	include 'header.php';
	include 'menu.php';
	echo ' 
	<div id="main">
		<form action="login_check.php" method="post" id="form">
		<h2>Login Information</h2>
			<fieldset class="login_register">
				<label for="login_email" class="form">E-mail:</label>
				<input type="text" name="myemail" id="login_email" />
				<label for="login_password" class="form">Password:</label>
				<input type="password" name="mypassword" id="login_password" />
				<input type="submit" value="LOGIN" class="button" />
			</fieldset>
		</form>
	</div>
	';
	include 'footer.php';
?>




