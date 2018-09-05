<?php
var_dump($_POST);
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bookfinder');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($db=== false)
{
	die("Error: could not connect." . mysqli_connect_error());
}
$firstname=mysqli_real_escape_string($db,$_REQUEST['firstname']);
$lastname=mysqli_real_escape_string($db,$_REQUEST['lastname']);
$phone_no=mysqli_real_escape_string($db,$_REQUEST['number']);
$location=mysqli_real_escape_string($db,$_REQUEST['location']);
$email=mysqli_real_escape_string($db,$_REQUEST['email']);
$username=mysqli_real_escape_string($db,$_REQUEST['username']);
$password=mysqli_real_escape_string($db,$_REQUEST['password']);
$gender=mysqli_real_escape_string($db,$_REQUEST['gender']);


$sql="insert into profile (firstname,lastname,phone_no,location,email,username,password,gender) values ('$firstname','$lastname','$phone_no','$location','$email','$username','$password','$gender')";
if(mysqli_query($db,$sql))
{
  header("Location: MainActivity.html"); 
}
else{
	header("Location: Registration.html");
}
mysqli_close($db);

?>