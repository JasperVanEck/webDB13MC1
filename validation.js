	function checkEmail(registration) 
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
		if (pw1 == "" || pw2 == "") 
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

	