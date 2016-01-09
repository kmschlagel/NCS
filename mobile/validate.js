function checkme()
{
	var error = "";
	
	
	if(document.getElementById('name').value == "")
	{
		error = "Please enter your full name.\n";
	}
	
	
	var user_phone = document.getElementById('phone').value;
	
	var reg_exp_phone = /^[2-9]\d{2}-\d{3}-\d{4}$/;
	
	var valid_phone = reg_exp_phone.test(user_phone);
	
	if(!valid_phone)
	{
		error += "Please enter a valid phone number.\n";
	}
	

	var user_email = document.getElementById('email').value;
	
	var reg_exp_email = /^([a-zA-Z0-9]+([\.+_-][a-zA-Z0-9]+)*)@(([a-zA-Z0-9]+((\.|[-]{1,2})[a-zA-Z0-9]+)*)\.[a-zA-Z]{2,6})$/;
	
	var valid_email = reg_exp_email.test(user_email);
	
	if(!valid_email)
	{
		error += "Please enter a valid email address.\n";
	}
	
		
	if(document.getElementById('comments').value == "")
	
	{
		error += "Please enter a comment.\n";
	}
	
	
	if(document.getElementById('client').selectedIndex == 0)
	
	{
		error += "Please select what type of client you are.\n";
	}
	
	
	
	//don't change this part
	if(error == "")
	{
		return true;
	
	}
	else alert(error);
	{
		return false;	
	}
}