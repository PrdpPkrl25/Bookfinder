<?php
include('connection.php');
   session_start();

   $user_check=$_SESSION['username'];

   $ses_sql=mysqli_query($db,"select username from profile where username='$user_check'");

   $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session=$row['username'];

   if(isset($_SESSION['login_user']))
   {
   	header("location: login.php");
   }
?>