function checkform()
 {
var fname=document.forms["Regform"]["firstname"];
var lname=document.forms["Regform"]["lastname"];
var num=document.forms["Regform"]["number"].value;
var location=document.forms["Regform"]["location"];
var email=document.forms["Regform"]["email"];
var username=document.forms["Regform"]["username"];
var password=document.forms["Regform"]["password"].value;

if (fname.value=="")
{
	window.alert("Please enter your firstname");
	fname.focus();
	return false;

}
 
if (lname.value=="")
{
	window.alert("Please enter your firstname.");
	fname.focus();
	return false;
}

if (num.length!=10) 
{
	window.alert("Enter 10 digit phone number.");
	num.focus();
	return false;
}


if (location.value=="")
{
	window.alert("Please enter your location.");
	location.focus();
	return false;
}

if (email.value=="")
{
	window.alert("Email Address field cannot be empty.");
	email.focus();
	return false;
}

if (email.value.indexOf("@",0)<0)
{
	window.alert("Email must contaion @ character.");
	email.focus();
	return false;
}

if (email.value.indexOf(".",0)<0)
{
	window.alert("Email must contaion . character.");
	email.focus();
	return false;
}

if (username.value=="")
{
	window.alert("Username field cannot be empty.");
	username.focus();
	return false;
}

if (password.value=="")
{
	window.alert("Password field cannot be empty.");
	password.focus();
	return false;
}

if (password.length<6)
{
	window.alert("Password must be at least 6 character long.");
	password.focus();
	return false;
}



}









