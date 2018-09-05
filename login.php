<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bookfinder');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    var_dump($_SESSION['login_error']);
   	$username=mysqli_real_escape_string($db,$_POST['username']);
   	$password=mysqli_real_escape_string($db,$_POST['password']);
   	$sql="Select * from profile where username='$username' and password='$password'";
   	$result=mysqli_query($db,$sql);
   	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   	$active=$row['firstname'];
   	$count=mysqli_num_rows($result);
   	if($count==1)
   	{
   		$_SESSION['username']="$username";
   		$_SESSION['firstname']="$active";
   		header("location: Welcome.php");
   	}
   	else {
   	    $_SESSION['login_error']='Invalid username or password!';

         header("location:login.php");

    }

   }

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookFinder-login</title>
	<link rel="stylesheet" type="text/css" href="../project/loginstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <script>
	function validateForm() {
    var name = document.forms["loginform"]["username"].value;
    var password= document.forms["loginform"]["password"].value;
    if (name == "") {
        alert("Username field cannot be empty.");
        
        return false;
        }
        else if(password=="")
        {
          alert ("Password field cannot be empty.");
          
          return false;
        }
    }
    </script>
  <style>
    
  .loginbtn:hover{
   background: red;

  }
  a:hover{
    color: red;
  }
  input[type=submit]:hover{
   background: #A9A9A9;
  }
  </style>

</head>

<body style="background-color: #F0F0F0;margin: 0px;">
	 
<div id="header" style="position: relative; background-color: #232f3e;height: 120px;width: 100%;margin-top: -40px;">

    <div id="logo" style=" float: left;width: 380px; ">
    <a href="MainActivity.html">

            <img src="Bimage/round.png" style="margin-left: -15px;">
    </a>
    </div>

    <div id="discription" style="width: 900px; margin-right: 0px;margin-left: 150px;">

        <h1 style="color: white;font-size: 60px;margin-left: 0px;margin-bottom: 0px;;">BOOK FINDER</h1>
        <p style="float:left;color: white;font-size: 24px;margin-top: 0px;margin-left: 170px;text-align: right;">An Online bookstore for buying and selling</p>
    </div>

    <div id="nav-right" style="position: relative; float: right;margin-top: -62px;margin-right: 30px;">
        <div class="nav-button" style="margin-right: 30px;">
            <a href="login.php" style="color: white" class="link">
                <h3 style="color: white;font-family:Aerial,sans-serif;font-weight: 400;font-size: 20px;">Login</h3>
            </a>
        </div>

        <div class="nav-button" style="margin-right: 30px;">
            <a href="Registration.html" style="color: white;" class="link">
                <h3 style="margin-top: 5px; color: white;font-size: 20px;font-weight: 400;font-family: Aerial,sans-serif">Signup</h3>
            </a>
        </div>
        
    </div>

</div>

		

	<div id="box2" style="box-shadow: 0px 2px 35px 10px #888888;z-index: 10;margin-top: 100px;">

	    <h1 style="margin-top: 30px; margin-bottom: 10px;"><u> Login</u></h1>

		<form action="" method="POST" name="loginform" onsubmit="return validateForm()" >

			<h3 style="margin-top: 30px; margin-bottom: 5px;">Username</h3>
			<input type="text" name="username" style="padding: 6px;width: 250px;outline: none;" >
			<h3 style="margin-bottom: 5px;">Password</h3>

			<input type="password" name="password" id="loginpass" style="margin-bottom: 8px; padding: 6px;width: 250px;outline: none;"><br>

			<input type="checkbox" name="checkbox" onclick="myFunction()"><label for="checkbox" style=" font-family:Georgia">Show Password</label> <br><br>

            <span style="color: red;margin-top: -5px;">
                <?php if (isset($_SESSION['login_error']))
                {
                   echo $_SESSION['login_error'];

                }
                ?></span>
       <script>
                function myFunction() {
                var x = document.getElementById("loginpass");
               if (x.type === "password") {
                  x.type = "text";
                    } else {
                     x.type = "password";
                         }
                     }
       </script>
                   <br>
       <p style="font-family: Georgia">By logging in, you accept to our <a href="" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
			<input type="submit" name="Submit" value="Submit" style="margin-top: 10px;padding: 6px 10px;font-size: 15px;border: 2px solid silver;outline: none;font-weight: 550">
      <hr style="margin-bottom: 1px">

      <div style="background-color: #778899;height: 80px">
        <hr style="visibility: hidden;margin-top: 0px;">
			<h3 style="margin-bottom: 5px;margin-top: 20px;">Not a member? </h3>
			<a href="Registration.html" type="button" style=" font-weight: 550;margin-bottom: 25px;">SignUp</a>
          <hr style="visibility: hidden;margin-top: 0px;">
      </div>

		</form>


    </div>
   
    	
   
             
   <footer style="background-color: #333;margin-bottom: 0px; margin-left: 0px;margin-right: 0px; width: 100%;height: 100px;margin-top: 0px;">


	<div id="copyright" style=" ">
             	        

             	        <p style="text-align: center; margin-left: 20px; color: white;margin-top: 100px;">&copy BookFinder Pvt.Ltd</p>
    </div> 



   	<div id="box5" class="division" style="margin-top:-28px; ;margin-right:0px;margin-left: 980px; ">

			    		<h3 style="margin-bottom: 3px;color: white;"><u><b>Find us</b></u></h3>

			                <address style="font-family: sans-serif;margin-top: 0px; color: white;"> 
			                	Email :Beebakelam@gmail.com<br>
			                	Phone No: 7358685574<br>
			                    Address: Kathmandu,Nepal
			                </address>
			    		    		    		
	</div>

   
             


 
 

	
</footer>
             
         
    
    	
</body>
</html>

