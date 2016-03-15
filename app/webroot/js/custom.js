

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
	else if (email_value == '' || ! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email_value)) 
	{
		login_error();
	}
	else{
		alert('good')
	}


}


function login_error() {
	swal("Error", "Email or password invalid", "error")
}