<script type="text/Javascript">
function checkform(form)
 {
if(form.firstname.value=="")
{
	alert("Error:Enter your firstname!");
	form.firstname.focus();
	return false;

}
return true;
    /*
     var fname=document.forms["Regform"]["firstname"];
     var lname=document.forms["Regform"]["lastname"];
     var num=document.forms["Regform"]["number"];
     var location=document.forms["Regform"]["location"];
     var email=document.forms["Regform"]["email"];
     var username=document.forms["Regform"]["username"];
     var password=document.forms["Regform"]["password"];
     var confirm_password=document.forms["Regform"]["confirm_password"];

var message = document.getElementById('confirmMessage');
var goodColor = "#66cc66";
var badColor = "#ff6666";
if(password.value == confirm_password.value){
    pass2.style.backgroundColor = goodColor;
    message.style.color = goodColor;
    message.innerHTML = "Passwords Match!"
}else{
    pass2.style.backgroundColor = badColor;
    message.style.color = badColor;
    message.innerHTML = "Passwords Do Not Match!"

if (fname.value=="")
{
	window.alert("Please enter your firstname");
	fname.focus();
	return false;

}
else{
	return true;
}
 
 if (lname.value=="")
{
	window.alert("Please enter your lastname.");
	lname.focus();
	return false;
}
else{
	return true;
}

if (num.value==null) 
{
	window.alert("Please enter your phone number.");
	num.focus();
	return false;
}
else{
	return true;
}

if (len(num.value)!=10) 
{
	window.alert("Enter 10 digit phone number.");
	num.focus();
	return false;
}
else{
	return true;
}

 if (location.value=="")
{
	window.alert("Please enter your location.");
	location.focus();
	return false;
}
else{
	return true;
}

 if (email.value=="")
{
	window.alert("Email Address field cannot be empty.");
	email.focus();
	return false;
}
else{
	return true;
}

if (email.value.indexOf("@",0)<0)
{
	window.alert("Email must contaion @ character.");
	email.focus();
	return false;
}
else{
	return true;
}

if (email.value.indexOf(".",0)<0)
{
	window.alert("Email must contaion . character.");
	email.focus();
	return false;
}
else{
	return true;
}

 if (username.value=="")
{
	window.alert("Username field cannot be empty.");
	username.focus();
	return false;
}
else{
	return true;
}

if (password.value=="")
{
	window.alert("Password field cannot be empty.");
	password.focus();
	return false;
}
else{
	return true;
}

 if (password.value.length<6)
{
	window.alert("Error: Password must be at least 6 character long.");
	password.focus();
	return false;
}
else{
	return true;
}

var letters = /^[0-9a-zA-Z]+$/;
if(password.value.match(letters))
{
	return true;

}
else{
	window.alert("Password must contain alphabet and numeric value.");
	password.focus();
	return false;

}

*/
}
 </script>









