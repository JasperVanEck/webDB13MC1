<?php
	include 'header.php';
	include 'menu.php';
	echo ' 
	<div id="main">
		<form action="registerconfirm.php" method="post" id="form">
			<h2>Personal Information</h2>
			<fieldset class="login_register">
				<label for="register_email" class="form">First name:</label> 
				<input type="text" name="firstname" id="register_first_name"/>
				<label for="register_email" class="form">Last name:</label>
				<input type="text" name="lastname" id="register_last_name"/>
				<label for="register_email" class="form">E-mail:</label>
				     <input type="text" name="email" id="register_email"/>
			</fieldset>
			<h2>Login Information</h2>
			<fieldset class="login_register">
				<label for="register_email" class="form">Password:</label>
				<input type="password" name="password" id="register_password"/>
				<label for="register_email" class="form">Confirm password:</label>
				<input type="password" name="confirmpassword" id="register_password_conf"/>
				<input type="submit" class="button" value="SUBMIT"/>
			</fieldset>
		</form>
	</div>
	';

	include 'footer.php';

?>
