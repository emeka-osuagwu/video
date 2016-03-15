

function login() {
	var 
	email 			= document.getElementById('email'),
	email_value 		= email.value, 
	
	password 		= document.getElementById('password'),
	password_value 	= password.value;

	if (password_value == '') 
	{
		login_error();
	}
}


function login_error() {
	swal("Error", "Email or password invalid", "error")
}