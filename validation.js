
function formValidation()  
{  
var fname = document.registration.firstname;  
var lname = document.registration.lastname; 
var uemail = document.registration.email;  
var passid1 = document.registration.password; 


	if(firstName() && lastName() && validateEmail(uemail) && passidValidation(passid1, mx, my) && passidValidation(passid2, mx, my) && passid1 == passid2)  
	{   
  		return true;
	}       
	return false;  
}  

	
function validateFirstName()  
{   
	var letters = /^[A-Za-z]+$/; 
	var name = document.getElementById('register_first_name').value; 
	if(name.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('First Name must have alphabet characters only');  
		name.focus();  
		return false;  
	}  
} 


function validateLastName()  
{   
	var letters = /^[A-Za-z]+$/; 
	var name = document.getElementById('register_last_name').value; 
	if(name.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Last Name must have alphabet characters only');  
		name.focus();  
		return false;  
	}  
} 


function validateEmail(uemail)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	var name = document.getElementById('register_email').value; 
	if(uemail.value.match(mailformat))  
	{  
		return true;  
	}else  
	{  
		alert("You have entered an invalid email address!");  
		uemail.focus();  
	return false;  
	}  
} 


function passidValidation(passid1,mx,my)  
{  
	var passid_len = passid1.value.length;  
	if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
	{  
		("Password should not be empty / length be between "+mx+" to "+my);  
		passid1.focus();  
		return false;  
	}else
	{
		return true;
	}
} 

function checkPasswordMatch() 
{
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();

    if (password != confirmPassword)
        document.getElementById("divPassCheck").innerHTML = "Passwords do not match!";
    else
        document.getElementById("divPassCheck").innerHTML = "Passwords do match!";
}



