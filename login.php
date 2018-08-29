<?php

 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bookfinder');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   session_start();
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
   	$username=mysqli_real_escape_string($db,$_POST['username']);
   	$password=mysqli_real_escape_string($db,$_POST['password']);
   	$sql="Select id from profile where username='$username' and password='$password'";
   	$result=mysqli_query($db,$sql);
   	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   	$active=$row['active'];
   	$count=mysqli_num_rows($result);
   	if($count==1)
   	{
   		
   		$_SESSION['username']="username";
   		header("location: Activity1.php");
   	}
   	else{
           
            $message="Your username or password is invalid.";
            echo "<script type='text/javascript'>alert('$message');</script>";
           
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
</head>

<body style="background-color: #F0F0F0";>

	<div class="header" style="background-color: #232f3e; height: 120px;width: 100%;margin-top: ;">
		<div style="width: 380px;height: 100px;float: left;">
		  <a href="MainActivity.html"><img src="round.png" alt="Logo" style="">
		  </a>
	    </div>

		<div id="discription" style="position: relative;width: 900px; margin-right: -100px;">
          <h1 style="margin-top: 0px;color: white;font-size: 60px;margin-left: 0px;margin-bottom: 0px;">BOOK FINDER</h1>	
          <p style="color: white;font-size: 20px;margin-top: 0px;margin-left: 0px;text-align: right;">An Online bookstore for buying and selling</p>		

			
		</div>

		<div id="nav-right" style="position: relative; float: right; margin-top: -105px;margin-right: 20px;" >
			<div style="margin-right: 30px;">
				 <a href="login.php" style="color: white">
					<h3 style="color: white;">Login</h3>
				  </a>
			</div>

			<div style="margin-right: 30px;">
				<a href="Registration.html" style="color: white;"> 
				    <h3 style="margin-top: 5px;margin-right: 20px;color: white;">Signup</h3>
			        </a>
				
				
			</div>

			
		</div>	

	</div>

	<div id="box2">

	    <h1 style="margin-top: -20px; margin-bottom: 10px;"><u> Login</u></h1>

		<form action="" method="POST" name="loginform" onsubmit="return validateForm()" >
		
			<h3 style="margin-top: 30px; margin-bottom: 5px;">Username</h3>
			<input type="text" name="username" style="padding: 6px;width: 250px;" >
			<h3 style="margin-bottom: 5px;">Password</h3>

			<input type="password" name="password" id="loginpass" style="margin-bottom: 8px; padding: 6px;width: 250px;"><br>
			<input type="checkbox" onclick="myFunction()">Show Password <br>
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

			<input type="submit" name="Submit" value="submit" style="margin-top: 30px;padding: 6px 10px;font-size: 15px;border: 2px solid silver;">
			<h3 style="margin-bottom: 5px;margin-top: 30px;">Not a member? </h3>
			<a href="Registration.html" type="button" style="margin-bottom: 0px;">SignUp</a>
		
		</form>


    </div>
    	
   
             
   <footer style="background-color: #333;margin-bottom: 0px; margin-left: 0px;margin-right: 0px; width: 100%;height: 100px;margin-top: 400px;">


	<div id="copyright" style=" ">
             	        

             	        <p style="text-align: center; margin-left: 20px; color: white;margin-top: 450px;">&copy BookFinder Pvt.Ltd</p>
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

