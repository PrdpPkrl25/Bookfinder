<?php
include('Session.php');
?>
<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to bookfinder</title>
	<link rel="stylesheet" type="text/css" href="../project/Activity1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

    <style>
 input[type=text]
		{	
	margin-right: 75px;
	width: 180px;
    box-sizing: border-box;
    border: 3px solid grey;
    border-right: none;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    font-size: 16px;
    text-align: left;
    background-color: white;
    background-image: url('http://i47.tinypic.com/r02vbq.png');
    background-position: -14px -14px; 
    background-repeat: no-repeat;
    margin-top: 0.5px;
    margin-left: 5px;
    padding: 8px 18px 8px 40px;
    transition: width 0.5s ease-in-out;
    outline: none;
    box-shadow: 2px 2px 2px 0px rgba(72, 72, 72, 0.83);
	}


 input[type=text]:focus {
    width: 30%;
    border-color: green;
 }

 .submitbtn {
  margin-left: 1165px;
  border: 3px solid grey;
  width: 70px;
  height: 46px;
  border-left: none;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  margin-top: -46px;
  box-shadow: 0px 2px 2px 0px rgba(72, 72, 72, 0.83);
  padding: 10px;
  background: #A9A9A9;
  font-size: 17px;
  cursor: pointer;
  margin-right: 4px;
  text-align: center;
 }

 .submitbtn:hover{
		background: #DCDCDC;
 }

 input[type=text],[type=submit]{
   	float: right;
 }


 .btn{
    height: 48px;
   	padding: 13px;
   	font-size: 17px;
   	font-weight: 550;
   	border: none;
   	margin:none;

 }

 .btn:hover{
    	outline:grey  solid 2px;
    	background-color: #808080;
    	color:red;
 }

 .dropbtn{
   	height: 48px;
   	padding: 14px;
   	font-size: 17px;
   	font-weight: 550;
   	border: none;
   	margin-top: -3px;
   	margin-left: 1px;
   }

 .dropbtn:hover{
   	background-color:#808080;
   	outline: grey solid 2px;
   	color: red;
   	
   }

 .dropdown{
   	position: relative;
   	display: inline-block;
   }

 .dropdown-content{
   	display: none;
   	position: absolute;
   	background-color: #F1F1F1;
   	min-width: 150px;
   	border-radius: 5px;
   	border:2px solid grey;
   	min-height: 300px;
   	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   	z-index: 1;
   }
 .dropdown-content a{
   	color: black;
   	padding: 12px 16px;
   	display: block;
   	text-decoration: none;
   }

 .dropdown-content a:hover {background-color: #ddd;}

 .dropdown:hover .dropdown-content {display: block;}

 .slides {
     display: none;
     vertical-align: middle;
     width: 1270px;
 }

 .prev,.next{
     padding: 15px;
     cursor: pointer;
     position: absolute;
     top: 50%;
     color: black;
     font-weight: bolder;
     font-size: 30px;
     transition: 0.6s ease-out;
     margin-top: 10px;
     opacity: 0.9;
     background:transparent;
     outline: none;
     border: none;
 }

 .next{
     right: 0;
 }

 .prev:hover, .next:hover {
     background-color: rgba(0,0,0,0.5);
 }

 .fade{
     animation-name:fade ;
     animation-duration: 1.2s;
 }

 @keyframes fade {
            from{
                opacity:.2;
               
            }
            to{
                opacity: 1;
            }
 }
   
  </style>

</head>
<body style="background-color: #F0F0F0;margin: 0px;">

 <div id="header" style="position: relative; background-color: #232f3e;height: 120px;width: 100%;margin-top: -10px;">

     <div id="logo" style=" float: left;width: 380px; ">
        <a href="MainActivity.html">
        <img src="Bimage/round.png" style="margin-left: -15px;">
        </a>
     </div>

     <div id="discription" style=" width: 900px; margin-right: 0px;margin-left: 150px;">

        <h1 style=" color: white;font-size: 60px;margin-left: 0px;font-family: Times New Roman,serif ;font-weight: 600;margin-bottom: 0px;">BOOK FINDER</h1>
        <p style="float:left;color: white;font-size: 24px;margin-top: -15px;margin-left: 170px;text-align: right;font-family: Times New Roman,serif ;">An Online bookstore for buying and selling.</p>
     </div>

     <div id="nav-right" style="float: right;position: relative;margin-top:-75px;margin-right: 30px;">

			<div class="dropdown" style="margin-right: 30px;">
			        <h4 style="color: white;font-size: 20px;">Welcome,<?php echo $_SESSION['firstname']; ?> </h4>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                </div>
			</div>
			
            <div id="Signup" style="margin-right: 30px;">
					<a href="Registration.php" style="color: white;">
				    <h4 style="margin-top: 0px;color: white;font-size: 20px"><a href="Logout.php" style="color: white;">Logout</a></h4>
			        </a>
			</div>
     </div>
 </div>


 <div class="searchbar" style="height: 50px; background-color: #FFA500;margin-top: 0px;margin-left: 0px;">

	<div class="searchbox" style="font-family: Times New Roman,serif ;font-weight:550;position: absolute">
		<form  action="" id="searchform">
  		<input type="text" name="search" placeholder="Search.." autocomplete="off">
  		<input type="submit" value="Search" class="submitbtn"></input>
		</form>
    </div>

     <div class="dropdown" style="margin-top: 4px; margin-left:-975px;" >
    	<button class="dropbtn"> Categories</button>
    	<div class="dropdown-content">
    		<a href="#">Engineering</a>
    		<a href="#">Management</a>
    		<a href="#">Medical</a>
    		<a href="#">Literature</a>
    		<a href="#">Fiction</a>
    		<a href="#">Travel</a>
    		<a href="#">Biography</a>
    	</div>
     </div>

     <div class="" style="margin-top: -48px;position: absolute; margin-left: 135px;">
		    <button class="btn " onclick="button()" id="home"> Home </button>
            <button class="btn " onclick="button()"> Watchlist</button>
    	    <button class="btn " onclick="button()"> History</button>
    	    <button class="btn " onclick="button()"> Message</button>
            <button class="btn " onclick="button()"> Seller</button>
     </div>
 </div>


  <div class="slideshow-container" style="max-width: 1270px;margin-left: 0px;margin-top: 0px;">

      <img class="slides fade" src="Bimage/Activityhome.jpg">
      <img class="slides fade" src="Bimage/home1.jpg">
      <img class="slides fade" src="Bimage/home2.jpg">
      <img class="slides fade" src="Bimage/home3.jpg">

      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>

  </div><br>

 <script>
     var slideIndex = 0;
      var slides = document.getElementsByClassName("slides");  
     showSlides();
     function plusSlides(n) {
           var newslideIndex=slideIndex+n;
           if(newslideIndex<5 && newslideIndex>0)
           {
               currentSlide(newslideIndex);
           }
           /*else if(newslideIndex> slide.length)
           {
               slideIndex=1
               slides[slideIndex-1].style.display="block";
           }
          */
     }
     
     function currentSlide(no) {
         var i;
         for(i=0;i<slides.length;i++)
         {
             slides[i].style.display="none";
         }
         slideIndex=no;
        slides[no-1].style.display="block";
     }

     function showSlides() {

         var i;
         for (i = 0; i < slides.length; i++)
         {
             slides[i].style.display = "none";
         }
         slideIndex++;
         if (slideIndex> slides.length)
         {slideIndex = 1}
         slides[slideIndex-1].style.display = "block";
         setTimeout(showSlides, 6000);
     }


 </script>

 <footer style="background-color: #333;margin-bottom: 0px; margin-left: 8px;margin-right: 0px; width: 100%;height: 100px;">
 
        <div id="copyright" style=" ">
            <p style="text-align: center;margin-left: 20px;color: white;margin-top: 400px;">&copy BookFinder Pvt.Ltd</p>
        </div> 
             
	    <div id="box5" class="division" style="float: right;margin-top:-45px; ;margin-right: 40px; ">

            <h3 style="margin-bottom: 3px;color: white;"><u><b>Find us</b></u></h3>
            <address style="font-family: sans-serif;margin-top: 3px; color: white;">
                Email :Beebakelam@gmail.com<br>
                Phone No: 7358685574<br>
                Address: Kathmandu,Nepal
            </address>
	    </div>
 </footer>

</body>
</html>
