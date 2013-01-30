<?php
	
	include 'header.php';
	include 'menu.php';
	
		echo '
	

<SCRIPT LANGUAGE="JavaScript">

	function checkEmail(myForm) 
	{
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(registration.emailAddress.value))
		{
		return (true)
		}
			alert("Invalid E-mail Address! Please re-enter.")
			return (false)
	}

	function validatePwd() 
	{
		var invalid = " "; // Spatie mag niet
		var minLength = 6; // Minimaal 6 tekens
		var pw1 = document.registration.password.value;
		var pw2 = document.registration.passwordConfirm.value;
	// Beide velden gelijke waarde
		if (pw1 == '' || pw2 == '') 
		{
			alert("Please enter your password twice.");
			return false;
		}
	// Minimale lengte variabele
		if (document.registration.password.value.length < minLength) 
		{
			alert("Your password must be at least " + minLength + " characters long. Try again.");
			return false;
		}
	// spatiegebruik variabele
		if (document.registration.password.value.indexOf(invalid) > -1); 
		{
			alert("Spaces are not allowed.");
			return false;
		}

		else 
		{
		if (pw1 != pw2) 
			{
			alert ("You did not enter the same new password twice. Please re-enter your password.");
			return false;
			}
		else 
		{
			return true;
      	}
   		}
	}

	
</script>


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
