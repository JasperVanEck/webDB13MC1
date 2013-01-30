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
		var invalid = " "; // Invalid character is a space
		var minLength = 6; // Minimum length
		var pw1 = document.myForm.password.value;
		var pw2 = document.myForm.password2.value;
	// check for a value in both fields.
		if (pw1 == '' || pw2 == '') 
		{
			alert('Please enter your password twice.');
			return false;
		}
	// check for minimum length
		if (document.myForm.password.value.length < minLength) 
		{
			alert('Your password must be at least ' + minLength + ' characters long. Try again.');
			return false;
		}
	// check for spaces
		if (document.myForm.password.value.indexOf(invalid) > -1) 
		{
			alert("Sorry, spaces are not allowed.");
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