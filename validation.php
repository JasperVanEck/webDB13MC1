<style type="javascript"> 

function formValidation()  
{  
var fname = document.registration.firstname;  
var lname = document.registration.lastname; 
var uemail = document.registration.email;  
var passid1 = document.registration.password; 
var passid2 = document.registration.confirmpassword; 


	if(allLetter(fname) && allLetter(lname) && validateEmail(uemail) && passidValidation(passid1, mx, my) && passidValidation(passid2, mx, my) && passid1 == passid2)  
	{   
  		return true;
	}       
	return false;  
}  

	
function allLetter(fname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(fname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('First Name must have alphabet characters only');  
		fname.focus();  
		return false;  
	}  
} 


function validateEmail(uemail)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
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
		alert("Password should not be empty / length be between "+mx+" to "+my);  
		passid1.focus();  
		return false;  
	}else
	{
		return true;
	}
} 





</style>


