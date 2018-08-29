<?php
var_dump($_POST);
$dbc= mysqli_connect("localhost","root","","bookfinder");
if($dbc=== false)
{
	die("Error: could not connect." . mysqli_connect_error());
}
$firstname=mysqli_real_escape_string($dbc,$_REQUEST['firstname']);
$lastname=mysqli_real_escape_string($dbc,$_REQUEST['lastname']);
$phone_no=mysqli_real_escape_string($dbc,$_REQUEST['number']);
$location=mysqli_real_escape_string($dbc,$_REQUEST['location']);
$email=mysqli_real_escape_string($dbc,$_REQUEST['email']);
$username=mysqli_real_escape_string($dbc,$_REQUEST['username']);
$password=mysqli_real_escape_string($dbc,$_REQUEST['password']);
$gender=mysqli_real_escape_string($dbc,$_REQUEST['gender']);


$sql="insert into profile (firstname,lastname,phone_no,location,email,username,password,gender) values ('$firstname','$lastname','$phone_no','$location','$email','$username','$password','$gender')";
if(mysqli_query($dbc,$sql))
{
	echo "Record added sucessfully.";
  header("Location: MainActivity.html"); 
}
else{
	echo "Error: Could not able to execute $sql." . mysqli_error($dbc);
	header("Location: Registration.html");
}
mysqli_close($dbc);


?>