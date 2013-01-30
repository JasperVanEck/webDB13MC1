<?php
	
	include 'header.php';
	include 'menu.php';
	
		echo ' <script type="text/javascript" src="validation.js"></script>';
	
		echo '

 

			<div id="main">

		<form name="registration" action="registerconfirm.php" method="post" id="form" onSubmit="return validatePwd()">
			
			
			<h2>Personal Information</h2>
			
			
			<fieldset class="login_register">
				
				
				<label for="firstName" class="form">First name:</label> 
				
					<div class="registrationForm" id= "firstNameCheck"></div>

						<input type="text" name="firstname" id="register_first_name"/>
				
				
				<label for="lastName" class="form">Last name:</label>

					<div class="registrationForm" id="lastNameCheck"></div>
				
						<input type="text" name="lastname" id="register_last_name"/>

				
				<label for="email" class="form">E-mail:</label>

					<div class="registrationForm" id="emailCheck"></div>
				     
						<input type="text" name="emailAddress" id="register_email"/>
			
			
			</fieldset>
			
			
			<h2>Login Information</h2>
			
			<fieldset class="login_register">
				
				
				<label for="password" class="form">Password:</label>
				
					<div class="registrationForm" id="lastNameCheck"></div>					

						<input type="password" name="password" id="password"/>
				
				
				<label for="passwordCheck" class="form">Confirm password:</label>

					<div class="registrationFormAlert" id="divPassCheck"></div>
				
						<input type="password" name="passwordConfirm" id="passwordConfirm"/>
				
				
				<input type="submit" class="button" value="SUBMIT"/>
			
			</fieldset>
		
		</form>
	
	</div>
	
	';

	include 'footer.php';

?>
