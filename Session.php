<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bookfinder');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

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