

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
		var data = {
			'url' 		: '/cakephp/users/login',
			'email' 		: email_value,
			'method' 	: 'POST',
			'password'  	: password_value
		}

		ajaxCall(data)
	}


}


function login_error() {
	swal("Error", "Email or password invalid", "error")
}


function ajaxCall(data)
{
	$.ajax({
		url	: data.url,
		type	: data.method,
		data	: data.parameter,
		success: function (response)
		{
		},
		error: function()
		{
			alert("Are you sure you doing this the right way?");
		},
	});
}